<?php

namespace Modules\FormX\Services;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
//---- services ---
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Services\RouteService;

class FormXService {
    public static function registerComponents() {
        $view_path = __DIR__.'/../Resources/views/includes/components/form';
        $blade_component = 'components.blade.input';
        $views = [];

        if (in_admin()) {
            $views[] = 'adm_theme::layouts.'.$blade_component;
            $views[] = 'pub_theme::layouts.'.$blade_component;
            $views[] = 'themex::layouts.'.$blade_component;
        } else {
            $views[] = 'pub_theme::layouts.'.$blade_component;
            $views[] = 'adm_theme::layouts.'.$blade_component;
            $views[] = 'themex::layouts.'.$blade_component;
        }
        $blade_component = $views[0];
        if (0) {
            if (in_admin()) {
                $blade_component = 'adm_theme::includes.'.$blade_component;
            } else {
                $blade_component = 'pub_theme::layouts.'.$blade_component;
            }
        }
        if (! File::exists($view_path.'/_components.json')) {
            $files = File::allFiles($view_path);
            $comps = [];
            foreach ($files as $file) {
                $filename = $file->getRelativePathname();
                $ext = '.blade.php';
                if (ends_with($filename, $ext)) {
                    $base = substr(($filename), 0, -strlen($ext));
                    $name = str_replace(DIRECTORY_SEPARATOR, '_', $base);
                    $name = 'bs'.studly_case($name);
                    $comp_view = str_replace(DIRECTORY_SEPARATOR, '.', $base);
                    $comp_view = 'formx::includes.components.form.'.$comp_view;
                    $comp = new \StdClass();
                    $comp->name = $name;
                    $comp->view = $comp_view;
                    $comp->base = $base;
                    $comp->dir = realpath($file->getPath());
                    $comps[] = $comp;
                }//endif
            }//end foreach
            File::put($view_path.'/_components.json', json_encode($comps));
        } else {
            $comps = File::get($view_path.'/_components.json');
            $comps = json_decode($comps);
        }
        foreach ($comps as $comp) {
            Form::component(
                $comp->name,
                $comp->view,
                ['name', 'value' => null, 'attributes' => [],
                    'options' => [],
                    //'lang'=>$lang,
                    'comp_view' => $comp->view,
                    'comp_dir' => realpath($comp->dir),
                    'comp_ns' => implode('.', array_slice(explode('.', $comp->view), 0, -1)),
                    'blade_component' => $blade_component, ]
            );
        }//end foreach
    }

    //end function

    public static function registerMacros() {
        $macros_dir = __DIR__.'/../Macros';
        Collection::make(glob($macros_dir.'/*.php'))
            ->mapWithKeys(function ($path) {
                return [$path => pathinfo($path, PATHINFO_FILENAME)];
            })
            ->reject(function ($macro) {
                return Collection::hasMacro($macro);
            })
            ->each(function ($macro, $path) {
                $class = '\\Modules\\FormX\\Macros\\'.$macro;
                if ('BaseFormBtnMacro' != $macro) {
                    Form::macro('bs'.Str::studly($macro), app($class)());
                }
            });
    }

    //end function

    /*
    When the element is displayed after the call to freeze(), only its value is displayed without the input tags, thus the element cannot be edited. If persistant freeze is set, then hidden field containing the element value will be output, too.
    */

    public static function fieldsExclude($params) {
        extract($params);

        $fields_exclude = [];
        $fields_exclude[] = 'id';
        if (method_exists($rows, 'getForeignKeyName')) {
            $fields_exclude[] = $rows->getForeignKeyName();
        }
        if (method_exists($rows, 'getForeignPivotKeyName')) {
            $fields_exclude[] = $rows->getForeignPivotKeyName();
        }
        if (method_exists($rows, 'getRelatedPivotKeyName')) {
            $fields_exclude[] = $rows->getRelatedPivotKeyName();
        }
        if (method_exists($rows, 'getMorphType')) {
            $fields_exclude[] = $rows->getMorphType();
        }
        $fields_exclude[] = 'related_type'; //-- ??
        return $fields_exclude;
    }

    public static function inputFreeze($params) {
        extract($params);
        $field->name_dot = str_replace(['[', ']'], ['.', ''], $field->name);
        if (in_array('value', array_keys($params))) {
            $field->value = $value;
        } else {
            $field->value = Arr::get($row, $field->name_dot);
        }
        if (isset($label)) {
            $field->label = $label;
        }

        $tmp = Str::snake($field->type);
        $tmp = str_replace('_', '.', $tmp);
        $view = 'formx::includes.components.freeze.'.$tmp;

        $view_params = $params;

        $view_params['row'] = $row;
        $view_params['field'] = $field;
        $field->method = Str::camel($field->name);

        if (is_object($field->value)) {
            $is_collection = ('Illuminate\Database\Eloquent\Collection' == get_class($field->value));
        } else {
            $is_collection = false;
        }
        if ($is_collection) {
            $rows = $row->{$field->method}(); //cachare tutto per accellerare
            $related = $rows->getRelated();
            //$related=$field->value->first();
            /////////////////////////////////////
            $params['rows'] = $rows;

            //$view_params['rows']=$rows->get();
            $view_params['rows'] = $field->value;

            $fields_exclude = FormXService::fieldsExclude($params);
            $related_panel = ThemeService::panelModel($related);
            if (is_object($related_panel)) {
                $related_fields = $related_panel->fields();
            } else {
                $related_fields = [];
            }
            $related_fields = collect($related_fields)->filter(function ($item) use ($fields_exclude) {
                return ! in_array($item->name, $fields_exclude);
            })->all();

            $related_name = Str::singular($field->name);
            //$view_params['related']=$related->get();
            $view_params['related_name'] = $related_name;
            $view_params['related_fields'] = $related_fields;

            $url = RouteService::urlRelated([
                'row' => $row,
                'related' => $related,
                'related_name' => $related_name,
                'act' => 'index',
            ]);

            $view_params['manage_url'] = $url;

            if (method_exists($rows, 'getPivotClass')) {
                $pivot_class = $rows->getPivotClass();
                $pivot = new $pivot_class();
                $pivot_panel = ThemeService::panelModel($pivot);
                $pivot_fields = $pivot_panel->fields();
                $pivot_fields = collect($pivot_fields)->filter(function ($item) use ($fields_exclude) {
                    return ! in_array($item->name, $fields_exclude);
                })->all();
                $view_params['pivot'] = $pivot;
                $view_params['pivot_panel'] = $pivot_panel;
                $view_params['pivot_fields'] = $pivot_fields;
            }

            //ddd($field->fields);
            //$field->fields=$field->value;
        }

        $view_params['field'] = $field;

        return view($view)
                ->with($view_params)
        ;
    }

    public static function inputHtml($params) {
        extract($params);
        $input_type = 'bs'.studly_case($field->type);
        $input_name = collect(explode('.', $field->name))->map(function ($v, $k) {
            return 0 == $k ? $v : '['.$v.']';
        })->implode('');
        $input_value = (isset($field->value) ? $field->value : null);
        $col_bs_size = isset($field->col_bs_size) ? $field->col_bs_size : 12;

        if (! isset($field->attributes) || ! is_array($field->attributes)) {
            $field->attributes = [];
        }
        $input_attrs = $field->attributes;
        if (isset($field->fields)) {
            $input_attrs['fields'] = $field->fields;
        }
        $div_exludes = ['Hidden', 'Cell'];
        $input_opts = ['field' => $field];
        if (! in_array($field->type, $div_exludes)) {
            return '<div class="col-sm-'.$col_bs_size.'">'.Form::$input_type($input_name, $input_value, $input_attrs, $input_opts).'</div>';
        }

        return Form::$input_type($input_name, $input_value, $input_attrs, $input_opts);
    }
}//end class

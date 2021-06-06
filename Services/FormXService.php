<?php

declare(strict_types=1);

namespace Modules\FormX\Services;

use Collective\Html\FormFacade as Form;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
//---- services ---
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Services\PolicyService;
use Modules\Xot\Services\RouteService;

/**
 * Class FormXService.
 */
class FormXService {
    /**
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     *
     * @return array|mixed
     */
    public static function getComponents() {
        $view_path = realpath(__DIR__.'/../Resources/views/collective/fields');
        $components_json = $view_path.'/components.json';
        $components_json = str_replace(['/', '\\'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $components_json);
        //dddx([$components_json, DIRECTORY_SEPARATOR]);
        $exists = File::exists($components_json);
        if ($exists) {
            $content = File::get($components_json);
            $json = json_decode($content);
            //dddx($json);

            return $json;
        }

        $comps = [];
        $dirs = File::directories($view_path);
        foreach ($dirs as $k => $v) {
            $comp = new \StdClass();
            //$comp->dir = $v;
            $name = Str::after($v, $view_path.DIRECTORY_SEPARATOR);
            $comp->view = 'formx::collective.fields.'.$name.'.field';
            //$comp->view = 'formx::includes.components.input.'.$name.'.field';
            $name = 'bs'.Str::studly($name);
            $comp->name = $name;
            $comps[] = $comp;
            //--- 2' LEVEL ---
            $parent = $comp;
            $files = File::files($v);
            foreach ($files as $file) {
                $filename = $file->getRelativePathname();
                if (Str::startsWith($filename, 'field_') && Str::endsWith($filename, '.blade.php')) {
                    $comp = new \StdClass();
                    //$comp->dir = $parent->dir;
                    $comp->view = $parent->view.Str::after(Str::before($filename, '.blade.php'), 'field');
                    $sub_name = Str::before(Str::after($filename, 'field_'), '.blade.php');
                    $comp->name = $parent->name.Str::studly($sub_name);
                    $comps[] = $comp;
                }
            }
        }
        $content = json_encode($comps);
        File::put($components_json, $content);

        return $comps;
    }

    public static function registerComponents(): void {
        $comps = self::getComponents();
        $blade_component = 'components.blade.input';
        if (in_admin()) {
            $blade_component = 'adm_theme::layouts.'.$blade_component;
        } else {
            $blade_component = 'pub_theme::layouts.'.$blade_component;
        }

        foreach ($comps as $comp) {
            Form::component(
                $comp->name,
                $comp->view,
                ['name', 'value' => null, 'attributes' => [],
                    'options' => [],
                    'comp_view' => $comp->view,
                    //'comp_dir' => realpath($comp->dir),
                    'comp_ns' => implode('.', array_slice(explode('.', $comp->view), 0, -1)),
                    'blade_component' => $blade_component, ]
            );
        }//end foreach
    }

    //end function

    public static function registerMacros(): void {
        $macros_dir = __DIR__.'/../Macros';
        Collection::make(glob($macros_dir.'/*.php'))
            ->mapWithKeys(function ($path) {
                return [$path => pathinfo($path, PATHINFO_FILENAME)];
            })
            ->reject(function ($macro) {
                return Collection::hasMacro($macro);
            })
            ->each(function ($macro, $path): void {
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

    /**
     * @param array $params
     *
     * @return array
     */
    public static function fieldsExclude($params) {
        extract($params);
        if (! isset($rows)) {
            dddx(['err' => 'rows is missing']);

            return [];
        }

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

    //ret \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|string|void

    public static function inputFreeze(array $params): Renderable {
        extract($params);
        if (! isset($field)) {
            throw new \Exception('field is missing');
        }
        if (! isset($row)) {
            throw new \Exception('row is missing');
        }

        //$field->name_dot = str_replace(['[', ']'], ['.', ''], $field->name);
        $field->name_dot = bracketsToDotted($field->name);

        if (in_array('value', array_keys($params))) {
            $field->value = $params['value'];
        } else {
            try {
                $field->value = Arr::get($row, $field->name_dot);
                if (null == $field->value) {
                    $field->value = Arr::get((array) $row, $field->name_dot);
                }
                //$field->value = $row->{$field->name_dot};
                //$field->value = 'test['.$field->name_dot.']'.Arr::get($row, 'nome_diri');
            } catch (\Exception $e) {
                $field->value = '---['.$field->name_dot.']['.$e->getMessage().']['.__LINE__.'-'.basename(__FILE__).']['.$row->{$field->name_dot}.']--';
            }
        }

        //return '['.__LINE__.__FILE__.']';

        if (isset($label)) {
            $field->label = $label;
        }

        $tmp = Str::snake($field->type);

        //$view = 'formx::includes.components.input.'.$tmp.'.freeze';
        $view = 'formx::collective.fields.'.$tmp.'.freeze';

        if (isset($field->sub_type)) {
            $view .= '_'.Str::snake($field->sub_type);
        }

        if (! View::exists($view)) {
            //return '<span style="color:#d60021">['.$view.'] NOT EXISTS !!</span>';
            $tmp1 = Str::before($tmp, '_');
            $tmp2 = Str::after($tmp, '_');
            //$view1 = 'formx::includes.components.input.'.$tmp1.'.freeze_'.$tmp2;
            $view1 = 'formx::collective.fields.'.$tmp1.'.freeze_'.$tmp2;

            if (! View::exists($view1)) {
                //return '<span style="color:#d60021">['.$view.']['.$view1.'] NOT EXISTS !!</span>';
                return view()->make('formx::collective.fields.error.err1', ['msg' => '['.$view.']['.$view1.'] NOT EXISTS !!']);
            }

            $view = $view1;
        }

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
            $related_fields = collect($related_fields)
                ->filter(
                    function ($item) use ($fields_exclude) {
                        return ! in_array($item->name, $fields_exclude);
                    }
                )
                ->all();

            $related_name = Str::singular($field->name);
            //$view_params['related']=$related->get();
            $view_params['related_name'] = $related_name;
            $view_params['related_fields'] = $related_fields;
            /*
            $url = RouteService::urlRelated([
                'row' => $row,
                'related' => $related,
                'related_name' => $related_name,
                'act' => 'index',
            ]);
            */
            $url = '#';

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

        $field->view = $view;
        $view_params['field'] = $field;

        return view()->make($view, $view_params);
    }

    /**
     * Undocumented function.
     *
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Support\HtmlString
     */
    public static function inputHtml(array $params) {
        extract($params);
        if (! isset($field)) {
            throw new \Exception('field is missing');
        }

        $input_type = 'bs'.Str::studly($field->type);
        if (isset($field->sub_type)) {
            $input_type .= Str::studly($field->sub_type);
        }

        $input_name = collect(explode('.', $field->name))->map(function ($v, $k) {
            return 0 == $k ? $v : '['.$v.']';
        })->implode('');
        $input_value = (isset($field->value) ? $field->value : null);
        $col_bs_size = isset($field->col_bs_size) ? $field->col_bs_size : 12;
        $field->col_bs_size = $col_bs_size;

        $div_row = isset($field->div_row) ? $field->div_row : false;
        $field->div_row = $div_row; //se si apre in un componente, bisogna chiuderlo in un altro

        if (! isset($field->attributes) || ! is_array($field->attributes)) {
            $field->attributes = [];
        }
        $input_attrs = $field->attributes;
        if (isset($field->fields)) {
            $input_attrs['fields'] = $field->fields;
        }
        $div_exludes = ['Hidden', 'Cell'];
        $input_opts = ['field' => $field];
        //if (! in_array($field->type, $div_exludes)) {
        //    return '<div class="col-sm-'.$col_bs_size.'">'.Form::$input_type($input_name, $input_value, $input_attrs, $input_opts).'</div>';
        //}
        //dddx([$field, $input_opts]);
        if (isset($field->label)) {
            $input_attrs['label'] = $field->label;
            //$input_attrs['field'] = $field;
        }

        return Form::$input_type($input_name, $input_value, $input_attrs, $input_opts);
    }

    public static function btnHtml(array $params): ?string {
        $class = 'btn btn-primary mb-2';
        $icon = null;       // icona a sx del titolo
        $label = null;
        $data_title = null; // titolo del modal e tooltip
        $title = null;      // stringa che appare nel tasto
        $lang = app()->getLocale();
        $error_label = 'default';
        $tooltip = null;

        extract($params);
        if (! isset($panel)) {
            throw new Exception('panel is missing');
        }
        if (! isset($method)) {
            throw new Exception('method is missing');
        }
        if (! isset($act)) {
            throw new Exception('act is missing');
        }
        if (! isset($url)) {
            throw new Exception('url is missing');
        }

        if (null == $data_title) {
            $data_title = $title;
        }
        $row = $panel->row;
        if ('default' == $error_label) {
            $error_label = '['.get_class($row).']['.$method.']';
        }
        $module_name = getModuleNameFromModel($row);
        if (null == $tooltip) {
            $tooltip = trans(strtolower($module_name.'::'.class_basename($row)).'.btn.'.$data_title);
        }
        //$url = RouteService::urlPanel(['panel' => $panel, 'act' => $act]);
        //$method = Str::camel($act);

        if (in_array($act, ['destroy', 'delete', 'detach'])) {
            $class .= ' btn-danger btn-confirm-delete';
        }

        if (! Gate::allows($method, $panel)) {
            //Strict comparison using === between false and string will always evaluate to false.
            dddx([$method.'policy non esiste', ! Gate::allows($method, $panel), $method, $panel]);

            return '';
            /*
            if (false == $error_label) {
                return null;
            }
            if ('production' == App::environment()) {
                return null;
            }
            $policy_class = PolicyService::get($panel)->createIfNotExists()->getClass();

            return '['.$policy_class.']['.$method.']';
            */
        }

        if (isset($modal)) {
            if ('' == $data_title) {
                $title = trans($module_name.'::'.strtolower(class_basename($row)).'.act.'.$act);
            }
        }

        if (isset($guest_url) && ! \Auth::check()) {
            $url = $guest_url;
        }
        if (isset($guest_notice) && $guest_notice && ! \Auth::check()) {
            $url = route('login.notice', ['lang' => $lang, 'referrer' => $url]);
        }

        if (isset($modal)) {
            $url = url_queries(['format' => $modal], $url);
            $target = '';
            switch ($modal) {
                case 'iframe':  $target = 'myModalIframe'; break;
                case 'ajax':    $target = 'myModalAjax'; break;
            }

            return
                    '<span data-toggle="tooltip" title="'.$tooltip.'">
                    <button type="button" data-title="'.$tooltip.'"
                    data-href="'.$url.'" data-toggle="modal" class="'.$class.'"
                    data-target="#'.$target.'">
                    '.$icon.' '.$title.'
                    </button>
                    </span>';
        }
        // data-href serve per le chiamate ajax
        //ddd($params, $title, $data_title);
        //$title = trans(strtolower($module_name.'::'.class_basename($row)).'.act.'.$title);
        //$data_title = $title;

        return '<a href="'.$url.'"
                    data-href="'.$url.'"
                    data-title="'.$data_title.'"
                    title="'.$title.'"
                    class="'.$class.'"
                    data-toggle="tooltip">
                    '.$icon.' '.$title.'
                </a>';
    }
}//end class

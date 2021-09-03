<?php

declare(strict_types=1);

namespace Modules\FormX\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Modules\Xot\Services\FileService;
use Modules\Xot\View\Components\XotBaseComponent;

/**
 * Class Input.
 */
class Input extends XotBaseComponent {
    public string $type;

    public string $name;

    public ?string $label;

    public ?string $class;

    //public ?string $input_id;
    public ?string $value;

    public ?string $placeholder;

    public array $attrs = [];

    public string $comp_ns;

    public string $input_component = 'formx::components.label_input.default';

    /**
     * Create a new component instance.
     *
     * @param string $label
     */
    public function __construct(
        string $type,
        string $name,
        ?string $label = null,
        ?string $class = null,
        //?string $id = null,
        ?string $value = null,
        ?string $placeholder = null
        ) {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->class = $class;
        //$this->input_id = $id;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    public function getView(): string {
        $view_base = 'formx::components.fields.';
        $views = [];
        /*
        password => password.field
        password_strengh => password.field_strengh
        password_multi_check => password.field_multi_check
        */
        $pieces = explode('_', $this->type);
        for ($i = 1; $i <= count($pieces); ++$i) {
            $before = implode('_', array_slice($pieces, 0, $i));
            $after = implode('_', array_slice($pieces, $i));
            $view_tmp = $before.'.field'.((null != $after) ? '_'.$after : '');
            $views[] = $view_tmp;
        }

        $view_work = collect($views)->first(function ($view_check) use ($view_base) {
            return view()->exists($view_base.$view_check);
        });

        if (false == $view_work) {
            $ddd_msg =
                [
                    'err' => 'Not Exists ..',
                    'line' => __LINE__,
                    'file' => __FILE__,
                    'pub_theme' => config('xra.pub_theme'),
                    'adm_theme' => config('xra.adm_theme'),
                    'view_base' => $view_base,
                    'view0_dir' => FileService::viewNamespaceToDir($views[0]),
                    'views' => $views,
                ];

            dddx($ddd_msg);
        }

        return $view_base.$view_work;
    }

    //ret \Illuminate\Contracts\View\View|string

    public function render(): Renderable {
        $view = $this->getView();

        $this->comp_ns = Str::beforeLast($view, '.');
        $this->attrs = [
            'name' => $this->name,
            'value' => $this->value,
            'class' => $this->class ?? 'form-control',
        ];

        /*
        $view_params = [
            'view' => $view,
            'comp_ns' => $this->comp_ns,
        ];
        */

        //dddx($view_params);

        //return view($view, $view_params);

        return view($view);
    }
}

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
<<<<<<< HEAD
    /**
     * The alert type.
     */
    public string $type;

    public string $label;
=======
    public string $type;
    public string $name;
    public ?string $label;
    //public ?string $class;
    //public ?string $input_id;
    public ?string $value;
    public ?string $placeholder;

    public array $attrs = [];
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

    public string $comp_ns;

    public string $input_component = 'formx::components.label_input.default';

    /**
     * Create a new component instance.
     *
<<<<<<< HEAD
     * @param string $type
     * @param string $label
     */
    public function __construct($type, $label = null) {
        //dddx(func_get_args());
        //dddx(get_class_methods($this));

        $this->type = $type;
        /*
        if (isset($label)) {
            $this->label = $label;
        } else {
            $this->label = 'No-Set-Label';
        }
        */
        $this->label = $label ?? 'No-Set-Label';
        //$this->name = $name ?? 'No-Set-Name';
        //dddx($this->data());
=======
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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
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
<<<<<<< HEAD
=======
                    'view_base' => $view_base,
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
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
<<<<<<< HEAD
=======
        $this->attrs = [
            'name' => $this->name,
            'value' => $this->value,
            'class' => $this->class ?? 'form-control',
        ];

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<?php

namespace Modules\FormX\Services;

use Illuminate\Support\Str;

class FieldService extends BaseFieldService {
    protected $label;
    protected $key;
    protected $file_multiple;
    protected $array_fields = [];
    protected $array_sortable = false;

    public function __construct($label, $name) {
        $this->label = $label;
        $this->name = $name ?? Str::snake(Str::lower($label));
        $this->key = 'form_data.'.$this->name;
    }

    public static function make($label, $name = null) {
        return new static($label, $name);
    }

    public function type($type) {//@XOT
        $this->type = Str::snake($type);

        return $this;
    }

    public function html() {//@XOT
        //$view = 'formx::livewire.fields.'.$this->type.'.field';
        $type = Str::snake($this->type);
        $start = 'formx::livewire.fields.';
        $views = [];
        $pieces = explode('_', $type);
        $pieces_count = count($pieces);
        for ($i = $pieces_count; $i > 0; --$i) {
            $a = array_slice($pieces, 0, $i);
            $b = array_slice($pieces, $i);
            $views[] = $start.implode('_', $a).'.'.implode('_', array_merge(['field'], $b));
        }
        $view = collect($views)->first(function ($view_check) {
            return \View::exists($view_check);
        });
        if (false == $view) {
            $ddd_msg =
                [
                    'err' => 'Not Exists ..',
                    'line' => __LINE__,
                    'file' => __FILE__,
                    'pub_theme' => config('xra.pub_theme'),
                    'adm_theme' => config('xra.adm_theme'),
                    //'view0_dir' => self::viewNamespaceToDir($views[0]),
                    'views' => $views,
                ];
            dddx($ddd_msg);
        }

        $view_params = [
            'view' => $view,
            'field' => $this,
        ];

        return view($view, $view_params);
    }

    public function file() {
        $this->type = 'file';

        return $this;
    }

    public function multiple() {
        $this->file_multiple = true;

        return $this;
    }

    public function array($fields = []) {
        $this->type = 'array';
        $this->array_fields = $fields;

        return $this;
    }

    public function sortable() {
        $this->array_sortable = true;

        return $this;
    }
}

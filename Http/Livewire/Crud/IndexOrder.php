<?php

namespace Modules\FormX\Http\Livewire\Crud;

use Livewire\Component;

class IndexOrder extends Component {
    public $rows = [];

    public function fix($arr) {
        return collect($arr)->map(
            function ($item) {
                return (object) $item;
            }
        ); //->all();
    }

    public function mount($rows) {
        $tmp = [];
        foreach ($rows as $row) {
            $tmp[$row->posizione] = ['id' => $row->id, 'title' => $row->treeLabel()];
        }
        asort($tmp);

        $this->rows = $this->fix($tmp);
        //dddx([$tmp, $this->rows]);
    }

    public function render() {
        $view = 'formx::livewire.crud.index_order';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}

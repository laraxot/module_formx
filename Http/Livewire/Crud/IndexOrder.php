<?php

namespace Modules\FormX\Http\Livewire\Crud;

use Livewire\Component;
use Modules\Xot\Services\PanelService;
use Modules\Xot\Services\TenantService;

class IndexOrder extends Component {
    //public $rows = [];
    //public $groups = [];
    public $route_params;
    public $data;

    public function fix($arr) {
        return collect($arr)->map(
            function ($item) {
                return (object) $item;
            }
        ); //->all();
    }

    public function mount($model = null) {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();
    }

    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    /*
    public function mount($rows) {



        $tmp = [];
        foreach ($rows as $row) {
            $name_tmp = 'task-'.$row->id;
            $tmp[$name_tmp] = [
                'id' => $row->id,
                'title' => $row->treeLabel(),
                'pos' => $row->posizione,
                'sons' => $row->treeSons(),
            ];
        }
        //asort($tmp);
        $tmp = collect($tmp)->sortBy('pos')->all();
        $this->rows = $this->fix($tmp);
        dddx([$tmp, $this->rows]);

    }
    */
    public function render() {
        $view = 'formx::livewire.crud.index_order';
        $view_params = [
            'view' => $view,
            //'rows' => $this->panel->rows()->get(),
            'tree_nodes' => [$this->panel->postType() => $this->panel->rows()->get()],
            'parent' => '0',
        ];

        return view($view, $view_params);
    }

    public function updateOrder($arr) {
        dddx($arr);
        /*
        foreach ($arr as $v) {
            $model = TenantService::model($model_name);
        }
        */
    }

    public function updateGroupOrder($a) {
        dddx($a);
    }
}

<?php

namespace Modules\FormX\Http\Livewire\Crud;

use Illuminate\Session\SessionManager;
use Livewire\Component;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Services\PanelService;
use Modules\Xot\Services\TenantService;

class IndexOrder extends Component {
    //public $rows = [];
    //public $groups = [];
    public $route_params;
    public $data;
    public $tree_nodes = [];
    public $tree_nodes_jstree = [];
    protected $listeners = ['check_callback'];

    /*

    public function fix($arr) {
        return collect($arr)->map(
            function ($item) {
                return (object) $item;
            }
        ); //->all();
    }
    */
    public function check_callback($operation, $node, $node_parent, $node_position, $more) {
        session()->flash('message', 'Users Created Successfully.');
        dddx([$operation, $node, $node_parent, $node_position, $more]);

        return false;
    }

    public function addMissingVars($item, $parent = null) {
        $panel = PanelService::get($item);
        if (null == $panel) {
            dddx($item);
        }
        $panel->setParent($parent);
        //dddx($panel);

        $model_name = $panel->postType();
        $model = $panel->row;
        $item['nome'] = $model->treeLabel();
        $item['model_name'] = $model_name;
        $icon = TenantService::config('icons.tree.'.$model_name);
        $item['icon'] = ThemeService::renderIcon($icon);

        $item['dropdown_submenu'] = false;
        $item['tree_id'] = $model->getKey();

        //$item['sons'] = [];

        $item['sons'] = $model->treeSons();

        $item['have_sons'] = $model->treeSonsCount();

        return $item;
    }

    public function mount(SessionManager $session, $model = null) {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();

        extract($this->route_params);

        $model_name = $container0;
        $model = TenantService::model($model_name);

        if (in_array('id_tbl_lingua', $model->getFillable())) {
            $nodes = $this->panel->rows()->where('id_tbl_lingua', 4);
        }
        $nodes = $nodes
            ->get()
            ->map(function ($item) {
                return $this->addMissingVars($item);
            })
            ->keyBy('tree_id')
            ->all();
        //dddx($nodes);
        $this->tree_nodes = [$model_name => $nodes];

        $this->tree_nodes_jstree = $this->createJson($this->tree_nodes);
    }

    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    public function createJson($tree_nodes) {
        $data = [];
        if (! is_array($tree_nodes)) {
            //return [];
        }

        foreach ($tree_nodes as $v_type => $tree_node) {
            foreach ($tree_node as $node) {
                $tmp = [];
                $tmp['id'] = $v_type.'-'.$node->id;
                $tmp['model_name'] = $v_type;
                //$tmp['icon'] = $node->icon;
                $tmp['text'] = $node->treeLabel();
                if (isset($node->sons)) {
                    //$tmp['children'] = $this->createJson($node->sons);
                } else {
                    //dddx('node sons non esiste');
                }
                $data[] = $tmp;
            }
        }

        return $data;
    }

    public function render() {
        $view = 'formx::livewire.crud.index_order.jstree';
        $view_params = [
            'view' => $view,
            //'rows' => $this->panel->rows()->get(),
            'tree_nodes' => [$this->panel->postType() => $this->panel->rows()->get()],
            'parent' => '0',
        ];
        //dddx($view_params);

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

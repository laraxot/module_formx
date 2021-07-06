<?php

namespace Modules\FormX\Http\Livewire\Crud;

use Illuminate\Session\SessionManager;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Ew\Models\Area;
use Modules\Ew\Models\Menu;
use Modules\Ew\Models\NotiziaCat;
use Modules\Ew\Models\PhotoCat;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\XotBasePanel;
use Modules\Xot\Services\PanelService;
use Modules\Xot\Services\TenantService;

/**
 *  Modules\FormX\Http\Livewire\Crud\IndexOrder.
 *
 * @property XotBasePanel $panel
 */
class IndexOrder extends Component {
    //public $rows = [];
    //public $groups = [];

    public $route_params;

    public $data;

    public array $tree_nodes = [];

    public array $tree_nodes_jstree = [];

    public array $tree_types = [];

    //protected $listeners = ['check_callback' => 'checkCallback'];

    /*

    public function fix($arr) {
        return collect($arr)->map(
            function ($item) {
                return (object) $item;
            }
        ); //->all();
    }
    */

    /**
     * @param array $node
     * @param array $node_parent
     * @param int   $node_position
     */
    public function save($node, $node_parent, $node_position) {
        //dddx(['node' => $node, 'node_parent' => $node_parent, 'node_position' => $node_position]);
        if ('#' == $node_parent['type']) {
            $model = TenantService::model($node['type']);
            [$type,$id] = explode('-', $node['id']);
            $row = $model->query()->find($id);
            $row->setAttribute('posizione', $node_position);
            $row->save();

            return;
        }
        $model = TenantService::model($node_parent['type']);
        [$type,$parent_id] = explode('-', $node_parent['id']);
        $row_parent = $model->find($parent_id);
        $types = Str::plural($node['type']);

        $model = TenantService::model($node['type']);
        [$type,$id] = explode('-', $node['id']);
        $row = $model->find($id);

        if (null == $row_parent) {
            $msg = (['node' => $node, 'node_parent' => $node_parent, 'node_position' => $node_position]);
            dddx($msg);
        }
        if (null == $row) {
            $msg = (['node' => $node, 'node_parent' => $node_parent, 'node_position' => $node_position]);
            dddx($msg);
        }

        $rows = $row_parent->$types();

        $up = [
            'posizione' => $node_position,
            //$rows->getForeignKeyName() => $parent_id,
        ];
        if (method_exists($rows, 'getForeignKeyName')) {
            $k = $rows->getForeignKeyName();
            $up[$k] = $parent_id;
        }

        if (in_array('id_padre', $row->getFillable()) && $node_parent['type'] != $node['type']) {
            $up['id_padre'] = 0;
        }

        //dddx([get_class_methods($rows), $rows->getParentKey(), $rows->getForeignKeyName(), $rows->getLocalKeyName()]);

        //dddx($up);
        $row->update($up);
        /*
        $row->posizione = $node_position;
        $row->{$rows->getForeignKeyName()} = $parent_id;
        $row->save();
        */
    }

    /**
     * @param string $operation
     * @param array  $node
     * @param array  $node_parent
     * @param int    $node_position
     */
    public function test($operation, $node, $node_parent, $node_position) {
        session()->flash('message', 'Users Created Successfully.');
        dddx([$operation, $node, $node_parent, $node_position]);
    }

    /**
     * @param string $operation
     * @param array  $node
     * @param array  $node_parent
     * @param int    $node_position
     *
     * @return bool
     */
    public function checkCallback($operation, $node, $node_parent, $node_position) {
        if ('move_node' != $operation) {
            session()->flash('message', 'posizione ['.$node_position.'] '.
                ' operation ['.$operation.']'.
                'node  ['.$node['type'].'] '.
                'node_parent  ['.$node_parent['type'].'] '.
                'node_position  ['.$node_position.'] '
                );
        }
        if ('move_node' == $operation) {
            if ('#' == $node_parent['type'] && 'area' == $node['type']) {
                return true;
            }

            if ('area' == $node_parent['type'] && 'menu' == $node['type']) {
                return true;
            }

            if ('menu' == $node_parent['type'] && 'menu' == $node['type']) {
                return true;
            }

            //return false;
        }

        return false;

        /*
        if ('move_node' == $operation) {
            if ('area' == $node['type']) {
                return true;
            } else {
                return false;
            }
        }
        */

        /*
        if ('drop_finish' == $operation) {
            if ('area' == $node['type']) {
                if ('#' == $node_parent['type']) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        */

        //return true;
    }

    /*
    public function getCheckProperty() {
        $html = '';
        $html .= "
        if (operation == 'move_node' && node.type) {
            if ('area' == node.type && '#' == node_parent.type) {
                return ".method_exists(Area::class, 'menus').";
            }
            if ('menu' == node.type && 'area' == node_parent.type) {
                return ".method_exists(Menu::class, 'pages').";
            }
            if ('page' == node.type && 'menu' == node_parent.type) {
                return true;
            }
            if ('notizia' == node.type && 'notizia_cat' == node_parent.type) {
                return ".method_exists(NotiziaCat::class, 'notizias').";
            }
            if ('page' == node.type && 'photo_cat' == node_parent.type) {
                return ".method_exists(PhotoCat::class, 'pages').';
            }
        }

        return false;';

        return $html;
    }
    */

    /**
     * @param object        $item
     * @param PanelContract $parent
     *
     * @return array
     */
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
        //dddx($item['sons']);

        $item['have_sons'] = $model->treeSonsCount();

        return $item;
    }

    /**
     * @param object $model
     */
    public function mount(SessionManager $session, $model = null) {
        $this->route_params = request()->route()->parameters();
        $this->data = request()->all();

        extract($this->route_params);

        if (! isset($container0)) {
            $container0 = 'home';
        }

        $model_name = $container0;
        $model = TenantService::model($model_name);
<<<<<<< HEAD

=======
        /*
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
        if (in_array('id_tbl_lingua', $model->getFillable())) {
            $nodes = $this->panel->rows()->where('id_tbl_lingua', 4);
        } else {
            $nodes = $this->panel->rows()->first();
        }
<<<<<<< HEAD
=======
        */
        $nodes = $this->panel->rows();
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
        $nodes = $nodes
            //->orderBy('posizione')
            ->get()
            ->map(function ($item) {
                return $this->addMissingVars($item);
            })
            ->keyBy('tree_id')
            ->sortBy('posizione')
            ->all();
        //dddx($nodes);
        $this->tree_nodes = [$model_name => $nodes];

        $this->tree_nodes_jstree = $this->createJson($this->tree_nodes);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response|mixed|null
     */
    public function getPanelProperty() {
        return PanelService::getByParams($this->route_params);
    }

    /**
     * @param array $tree_nodes
     *
     * @return array
     */
    public function createJson($tree_nodes) {
        $data = [];
        if (! is_array($tree_nodes)) {
            return [];
        }

        foreach ($tree_nodes as $v_type => $tree_node) {
            $tree_node = collect($tree_node)->sortBy('posizione')->all();
            $i = 1;
            foreach ($tree_node as $node) {
                $tmp = [];
                $tmp['id'] = $v_type.'-'.$node->id;
                $tmp['model_name'] = $v_type;
                $tmp['type'] = $v_type;

                $icon = TenantService::config('icons.tree.'.$v_type);
                //$item['icon'] = ThemeService::renderIcon($icon);
                //$this->tree_types[$v_type]['icon'] = 'fa fa-edit'; //ThemeService::renderIcon($icon);
                $this->tree_types[$v_type]['icon'] = '/'.$icon;
                //$this->tree_types[$v_type]['valid_children'] = ['default'];

                //$tmp['icon'] = $node->icon;
                //$tmp['text'] = $node->treeLabel().'('.substr($v_type, 0, 1).')';
                if ($node->posizione != $i) {
                    $node->posizione = $i;
                    unset($node->model_name,
                        $node->sons,
                        $node->have_sons,
                        $node->icon,
                        $node->dropdown_submenu,
                        $node->tree_id
                    );
                    if (in_array('posizione', $node->getFillable())) {
                        $node->update(['posizione' => $i]);
                    }
                }

                $tmp['text'] = $node->treeLabel().'('.$v_type.')('.$node->posizione.')('.$i.')';
                $tmp['text'] = str_replace('<br/>', '', $tmp['text']);
                //$tmp['text'] = nl2br($tmp['text']);

                $tmp['children'] = $this->createJson($node->treeSons());
                $data[] = $tmp;
                ++$i;
            }
        }

        return $data;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $opts = [
            'jstree',
            'fancytree',
            'jquery_sortable',
        ];

        $view = 'formx::livewire.crud.index_order.'.$opts[0];
        $view_params = [
            'view' => $view,
            //'rows' => $this->panel->rows()->get(),
            'tree_nodes' => [$this->panel->postType() => $this->panel->rows()->get()],
            'parent' => '0',
        ];
        //dddx($view_params);

        return view($view, $view_params);
    }

    /**
     * @param mixed $arr
     */
    public function updateOrder($arr) {
        dddx($arr);
        /*
        foreach ($arr as $v) {
            $model = TenantService::model($model_name);
        }
        */
    }

    /**
     * @param mixed $a
     */
    public function updateGroupOrder($a) {
        dddx($a);
    }
}

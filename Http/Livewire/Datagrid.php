<?php

namespace Modules\FormX\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\LU\Models\User;
use Modules\Theme\Services\ThemeService;

//use Modules\Cart\Models\BookingItem;

/**
 * full calendar
 * https://github.com/asantibanez/livewire-calendar
 * https://github.com/stijnvanouplines/livewire-calendar/blob/master/app/Http/Livewire/Calendar.php.
 */
class Datagrid extends Component {
    use WithPagination;
    //public $containers;
    //public $items;
    //public $index_fields;
    //public $rows;
    /**
     * Livewire component's [modules.form-x.http.livewire.datagrid] public property [rows] must be of type: [numeric, string, array, null, or boolean]. Only protected or private properties can be set as other types because JavaScript doesn't need to access them.
     */
    protected $rows;
    /*
    public function mount($_panel) {
        //[$this->containers,$this->items] = params2ContainerItem();
        $this->index_fields = $_panel->indexFields();
        $this->rows = $_panel->rows->paginate(10);
    }
    */

    public function getView() { //no di themeservice, perche' livewire
        $mod_name = Str::between(get_class(), 'Modules\\', '\\Http\\');
        $mod_name_low = strtolower($mod_name);
        $name = Str::after(get_class(), '\Http\Livewire\\');
        $name = str_replace('\\', '.', $name);
        $name = Str::snake($name);
        $view = $mod_name_low.'::livewire.'.$name;

        return $view;
    }

    public function render() {
        // ThemeService::getView(); //lu::admin.user.index.acts.test_users_with_livewire
        //get_class  = Modules\FormX\Http\Livewire\Datagrid
        //$view = $this->getView();
        $view = 'formx::livewire.datagrid';
        //dddx($view);
        $view_params = [
            'rows' => User::paginate(10), //$this->rows,
        ];

        return view($view, $view_params);
    }
}

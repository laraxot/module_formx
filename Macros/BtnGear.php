<?php

namespace Modules\FormX\Macros;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class BtnGear
 * @package Modules\FormX\Macros
 */
class BtnGear extends BaseFormBtnMacro {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($extra): ViewContract {
            $class = __CLASS__;
            $extra['generate_btn'] = 0;
            $vars = $class::before($extra);
            if ($vars['error']) {
                return $vars['error_msg'];
            }
            $routename = Request::route()->getName();
            $routetmp = Str::before($routename, $vars['old_act_route']);
            $act = 'no-set';
            switch ($vars['old_act_route']) {
                case 'index':
                    $act = 'index_edit';
                    break;
                case 'index_edit':
                    $act = 'index';
                    break;
                case 'show':
                    $act = 'edit';
                    break;
                case 'edit':
                    $act = 'show';
                    break;
            }
            $routename_gear = $routetmp.$act;
            $route_params = \Route::current()->parameters();
            try {
                $route_gear = route($routename_gear, $route_params);
            } catch (\Exception $e) {
                $route_gear = '#';
            }
            $func = Str::camel($act);
            $row = $extra['row'];
            $btns = [];
            if (\Auth::user()->can($func, $row)) {
                $tmp = [];
                $tmp['title'] = $act;
                $tmp['url'] = $route_gear;
                $tmp['icon'] = 'far fa-edit';
                $tmp['modal'] = 0;
                $btns[] = (object) $tmp;
            }
            //if (true) {
            $tmp = [];
            $tmp['title'] = 'Gestisti Traduzioni';
            $tmp['url'] = route('container0.index', ['container0' => 'translation', 'uri' => req_uri(), 'lang' => app()->getLocale()]);
            $tmp['icon'] = 'fas fa-language fa-2x';
            $tmp['modal'] = 1;
            $btns[] = (object) $tmp;
            //}
            $vars['btns'] = $btns;
            if (! isset($vars['view_comp'])) {
                dddx(['err' => 'view_comp is missing']);
                $vars['view_comp'] = '';
            }

            //return view($vars['view_comp'], $vars);
            return view()->make($vars['view_comp'], $vars);
        }; //end function
    }

    //end invoke
}//end class

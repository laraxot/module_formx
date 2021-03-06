<?php

namespace Modules\FormX\Macros;

use Illuminate\Support\Facades\Request;
//use Illuminate\Http\Request;
use Illuminate\Support\Str;
//----- services -----
use Modules\Xot\Services\PanelService as Panel;
use Modules\Xot\Services\StubService;

/**
 * Class BaseFormBtnMacro
 * @package Modules\FormX\Macros
 */
abstract class BaseFormBtnMacro {
    /**
     * @param array $params
     * @return array|void
     */
    public static function before($params) {
        $generate_btn = 1;
        $user = \Auth::user();
        if (null == $user) {
            return ['error' => 1, 'error_msg' => '[Not Logged]'];
        }
        $class = get_called_class();
        $class_name = class_basename($class); //BtnDetach
        $btn = Str::after($class_name, 'Btn');
        if ('Delete' == $btn) {
            $btn = 'Destroy';
        }
        $act = Str::camel($btn);
        extract($params);
        if (! isset($row)) {
            dddx(['err' => 'row is missing']);

            return;
        }
        if (! $user->can($act, $row) && ! in_array($act, ['gear'])) {
            $policy = StubService::getByModel($row, 'policy', $create = true);
            $error_msg = '[not can '.$act.']['.get_class($row).']';
            //ddd(App::environment('local'));
            if ('local' == env('APP_ENV')) {
                return ['error' => 1, 'error_msg' => $error_msg];
            } else {
                return ['error' => 1, 'error_msg' => ''];
            }
        }
        if (! isset($row->pivot) && 'detach' == $act) {
            return ['error' => 1, 'error_msg' => '[Not Pivot]'];
        }
        $act_route = Str::snake($act);

        $route_action = \Route::currentRouteAction();
        $old_act = Str::snake(Str::after($route_action, '@'));
        $routename = Request::route()->getName();
        $old_act_route = last(explode('.', $routename));

        if (! isset($panel)) {
            $panel = Panel::get($row);
        }

        $route = $panel->{$act.'Url'}();

        $view_comp_dir = 'formx::includes.components.btn';
        $view_comp = $view_comp_dir.'.'.$act_route;
        $data = [
            'error' => 0,
            'error_msg' => 'no errors',
            'user' => $user,
            'class_name' => $class_name,
            'btn' => $btn,
            'act' => $act,
            'act_route' => $act_route,
            'old_act' => $old_act,
            'old_act_route' => $old_act_route,
            'row' => $row,
            'id' => 2,
            //'routename_act' => $routename_act,
            'route' => $route,
            'btn_class' => 'btn btn-small btn-info',
            'view_comp' => $view_comp,
            'view_comp_dir' => $view_comp_dir,
        ];
        //ddd($generate_btn);
        //if ($generate_btn) {
        $data['btn'] = view($view_comp, $data);
        //}

        return $data;
    }
}

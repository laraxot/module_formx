<?php

namespace Modules\FormX\Macros;

use Collective\Html\FormFacade as Form;
//use Illuminate\Http\Request;

use Illuminate\Support\Str;

//----- services -----

class OpenPanel {
    public function __invoke() {
        return function ($panel, $act = '', $params = []) {
            $route_params = \Route::current()->parameters();
            $req_params = \Request::all();

            switch ($act) {
                case 'store':
                    $method = 'POST';
                break;
                case 'update':
                    $method = 'PUT'; //PUT/PATCH
                break;
                case 'destroy':
                    $method = 'DELETE';
                break;
                default:
                    $method = 'POST';
                break;
            }
            if (isset($params['method'])) {
                $method = $params['method'];
            }
            $form_name = 'form_'.$act;
            if (isset($params['form_name'])) {
                $form_name = $params['form_name'];
            }
            $func = Str::camel($act).'Url';

            $url = $panel->$func();

            return Form::model($panel->row,
                [
                    'url' => $url,
                    'name' => $form_name,
                    'id' => $form_name,
                ]
            )
            .method_field($method);
        }; //end function
    }

    //end invoke
}//end class

<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

use Collective\Html\FormFacade as Form;

//----- services -----

class Open {
    public function __invoke() {
        return function ($model, $from, $to = '', $params = null, $formName = 'theForm') {
            if (null == $params) {
                $params = \Route::current()->parameters();
            }
            $req_params = \Request::all();

            //if(is_array($req_params)) $params=array_merge($req_params,$params);

            //dd($params);

            if ('' == $to) {
                $to = $from;
                switch ($to) {
                    case 'update': $from = 'edit'; break;
                    case 'store': $from = 'create'; break;
                }
            }

            $act = $to.'_url';
            try {
                $route = $model->$act;
            } catch (\Exception $e) {
                $route = '';
            }
            if ('' == $route) {
                $routename = \Request::route()->getName();
                $routename = str_replace('.'.$from, '.'.$to, $routename);
                $route = route($routename, array_merge($params, $req_params));
            }

            switch ($to) {
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

            //$parz=array_merge([$routename], array_values($params));
            return Form::model($model,
                [
                    //'route' => $parz,
                    'url' => $route,
                    'name' => $formName,
                    'id' => $formName,
                    //'action' => $route
                ]
            )
            .method_field($method);
        }; //end function
    }

    //end invoke
}//end class

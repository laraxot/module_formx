<?php

namespace Modules\FormX\Macros;

use Collective\Html\FormFacade as Form;
//use Illuminate\Http\Request;

use Illuminate\Support\Str;

//----- services -----

/**
<<<<<<< HEAD
 * Class OpenPanel
 * @package Modules\FormX\Macros
=======
 * Class OpenPanel.
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
 */
class OpenPanel {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($panel, $act = '', $params = []) {
<<<<<<< HEAD
            $route_params = \Route::current()->parameters();
            $req_params = \Request::all();

=======
            //$route_params = \Route::current()->parameters();
            //$req_params = \Request::all();
            $methods=[
                'store'=>'POST',
                'update'=>'PUT',//PUT/PATCH
                'destroy'=>'DELETE',
            ];
            $method=isset($methods[$act])?$methods[$act]:'POST';
            /*
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
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
<<<<<<< HEAD
=======
            */
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
            if (isset($params['method'])) {
                $method = $params['method'];
            }
            $form_name = 'form_'.$act;
            if (isset($params['form_name'])) {
                $form_name = $params['form_name'];
            }
<<<<<<< HEAD
            $func = Str::camel($act).'Url';

            $url = $panel->$func();
=======
            //$func = Str::camel($act).'Url';

            //$url = $panel->$func();
            $url = $panel->url(['act' => $act]);

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

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

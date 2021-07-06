<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class FormSearchAddress
 * @package Modules\FormX\Macros
 */
class FormSearchAddress {
    /**
     * @return \Closure
     */
    public function __invoke() {
<<<<<<< HEAD
        return function ($params = []) {
=======
        return function (array $params = []) {
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
            $view_comp_dir = 'formx::includes.components.form_complete.search.address';

            return view($view_comp_dir)->with($params);
        }; //end return
    }

    //end invoke
}//end class

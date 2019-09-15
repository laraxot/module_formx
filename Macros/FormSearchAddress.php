<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

class FormSearchAddress {
    public function __invoke() {
        return function ($params = []) {
            $view_comp_dir = 'formx::includes.components.form_complete.search.address';
            return view($view_comp_dir)->with($params);
        }; //end return
    }

    //end invoke
}//end class

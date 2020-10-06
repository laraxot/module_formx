<?php

namespace Modules\FormX\Macros;

use Illuminate\Support\Facades\Request;

//use Illuminate\Http\Request;

//----- services -----

class BtnUpDown {
    public function __invoke() {
        return function ($extra) {
            extract($extra);
            //$params=\Route::current()->parameters();
            //$params=array_merge($params, $extra);
            //$routename=Request::route()->getName();
            return '<a href="'.$row->moveup_url.'" class="btn btn-xs btn-warning">
		            <i class="fa fa-arrow-up"></i>
		    </a>
		    <a href="'.$row->movedown_url.'" class="btn btn-xs btn-warning">
		        <i class="fa fa-arrow-down"></i>
		    </a>';
        }; //end function
    }

    //end invoke
}//end class

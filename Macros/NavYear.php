<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

class NavYear {
    public function __invoke() {
        return function ($extra = []) {
            return 'NAV YEAR !!';
        }; //end return
    }

    //end invoke
}//end class

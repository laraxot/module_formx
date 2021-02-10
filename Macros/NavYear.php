<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class NavYear
 * @package Modules\FormX\Macros
 */
class NavYear {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($extra = []) {
            return 'NAV YEAR !!';
        }; //end return
    }

    //end invoke
}//end class

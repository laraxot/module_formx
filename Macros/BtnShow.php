<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class BtnShow
 * @package Modules\FormX\Macros
 */
class BtnShow extends BaseFormBtnMacro {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($extra) {
            $class = __CLASS__;
            $vars = $class::before($extra);
            if ($vars['error']) {
                return $vars['error_msg'];
            }

            return $vars['btn'];
        }; //end function
    }

    //end invoke
}//end class

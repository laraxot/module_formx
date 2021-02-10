<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class BtnDelete
 * @package Modules\FormX\Macros
 */
class BtnDelete extends BaseFormBtnMacro {
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

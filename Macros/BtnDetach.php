<<<<<<< HEAD
<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class BtnDetach
 * @package Modules\FormX\Macros
 */
class BtnDetach extends BaseFormBtnMacro {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($extra) {
            $class = __CLASS__;
            $vars = $class::before($extra);
            if ($vars['error']) {
                return '';
            }// $vars['error_msg'];
            return $vars['btn'];
        }; //end function
    }

    //end invoke
}//end class
=======
<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class BtnDetach
 * @package Modules\FormX\Macros
 */
class BtnDetach extends BaseFormBtnMacro {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($extra) {
            $class = __CLASS__;
            $vars = $class::before($extra);
            if ($vars['error']) {
                return '';
            }// $vars['error_msg'];
            return $vars['btn'];
        }; //end function
    }

    //end invoke
}//end class
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

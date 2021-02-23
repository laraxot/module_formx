<<<<<<< HEAD
<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

use Collective\Html\FormFacade as Form;

//----- services -----

//--- azioni container

/**
 * Class BtnCreateAttach
 * @package Modules\FormX\Macros
 */
class BtnCreateAttach {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($extra) {
            $btns = '';
            $btns .= Form::bsBtnCreate($extra);
            //$btns.=Form::bsBtnIndexAttach($extra); //per adesso crea solo confusione
            return $btns;
        }; //end function
    }

    //end invoke
}//end class
=======
<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

use Collective\Html\FormFacade as Form;

//----- services -----

//--- azioni container

/**
 * Class BtnCreateAttach
 * @package Modules\FormX\Macros
 */
class BtnCreateAttach {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function ($extra) {
            $btns = '';
            $btns .= Form::bsBtnCreate($extra);
            //$btns.=Form::bsBtnIndexAttach($extra); //per adesso crea solo confusione
            return $btns;
        }; //end function
    }

    //end invoke
}//end class
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

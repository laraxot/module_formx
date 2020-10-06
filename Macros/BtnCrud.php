<?php

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

use Collective\Html\FormFacade as Form;

//----- services -----

class BtnCrud {
    public function __invoke() {
        return function ($extra) {
            $btns = '<div class="btn-group btn-group-sm" role="group" aria-label="Actions">';
            $btns .= Form::bsBtnEdit($extra);
            $btns .= Form::bsBtnDelete($extra);
            $btns .= Form::bsBtnDetach($extra);
            $btns .= Form::bsBtnShow($extra);
            //$btns.=Form::bsBtnClone($extra);
            $btns .= '</div>';

            return $btns;
        }; //end function
    }

    //end invoke
}//end class

<?php
namespace Modules\FormX\Macros;
use Illuminate\Support\Facades\Request;
//use Illuminate\Http\Request;

use Collective\Html\FormFacade as Form;
//----- services -----
use Modules\Theme\Services\ThemeService;


class BtnCrud{
	public function __invoke(){
        return function ($extra) {
    		$btns='';
    		$btns.=Form::bsBtnEdit($extra);
    		$btns.=Form::bsBtnDelete($extra);
    		$btns.=Form::bsBtnDetach($extra);
            $btns.=Form::bsBtnShow($extra);
    		//$btns.=Form::bsBtnClone($extra);
    		return $btns;
		}; //end function
	}//end invoke
}//end class
<?php
namespace Modules\FormX\Macros;
use Illuminate\Support\Facades\Request;
//use Illuminate\Http\Request;

use Collective\Html\FormFacade as Form;
//----- services -----
use Modules\Theme\Services\ThemeService;

//--- azioni container 
class BtnCreateAttach{
	public function __invoke(){
        return function ($extra) {
    		$btns='';
    		$btns.=Form::bsBtnCreate($extra);
    		$btns.=Form::bsBtnIndexAttach($extra);
    		return $btns;
		}; //end function
	}//end invoke
}//end class
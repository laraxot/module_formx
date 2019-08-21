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
<<<<<<< HEAD
    		$btns.=Form::bsBtnIndexAttach($extra);
=======
    		//$btns.=Form::bsBtnIndexAttach($extra); //per adesso crea solo confusione
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492
    		return $btns;
		}; //end function
	}//end invoke
}//end class
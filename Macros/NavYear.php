<?php
namespace Modules\FormX\Macros;
use Illuminate\Support\Facades\Request;
//use Illuminate\Http\Request;

use Collective\Html\FormFacade as Form;
//----- services -----
use Modules\Theme\Services\ThemeService;
//--- BASE ---
use Modules\FormX\Macros\BaseFormBtnMacro;


class NavYear{
	public function __invoke(){
        return function ($extra=[]) {
        	return 'NAV YEAR !!';
        };//end return
    }//end invoke
}//end class
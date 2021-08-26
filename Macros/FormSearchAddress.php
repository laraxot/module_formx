<?php

declare(strict_types=1);

namespace Modules\FormX\Macros;

//use Illuminate\Http\Request;

//----- services -----
//--- BASE ---

/**
 * Class FormSearchAddress.
 */
class FormSearchAddress {
    /**
     * @return \Closure
     */
    public function __invoke() {
        return function (array $params = []) {
            $view_comp_dir = 'formx::includes.components.form_complete.search.address';

            return view($view_comp_dir)->with($params);
        }; //end return
    }

    //end invoke
}//end class

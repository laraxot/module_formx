<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
namespace Modules\FormX\Models\Panels\Actions;

//-------- models -----------
//-------- services --------
//-------- bases -----------
<<<<<<< HEAD
=======
use Modules\Theme\Services\ThemeService;
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

/**
 * Class TestAction.
 */
class TestAction extends XotBasePanelAction {
    public bool $onContainer = true; //onlyContainer

    public string $icon = '<i class="fas fa-campground"></i>';

    public function handle() {
<<<<<<< HEAD
        return $this->panel->view();
=======
        $input = request()->input('input');
        $existings = [
            'calendar.v1', 'calendar.v2',
            'full_calendar', 'full_calendar.event',
            'datepicker', 'datetimepicker',
        ];
        $exists = in_array($input, $existings);

        $view = ThemeService::getView(); //vew che dovrebbe essere
        $view_params = [
            'view' => $view,
            'input' => $input,
            'existings' => $existings,
            'exists' => $exists,
        ];

        if ($exists) {
            $view .= '.'.$input;
        }

        return view($view, $view_params);

        //return $this->panel->view()->with($view_params);
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
    }
}
<?php

namespace Modules\FormX\Models\Panels;

use Modules\Xot\Models\Panels\XotBasePanel;

class HomePanel extends XotBasePanel {
    public static $model = 'Modules\Xot\Models\Home';

    public function actions() {
        return [
            new Actions\FullcalendarAction(),
        ];
    }
}

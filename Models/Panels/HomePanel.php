<?php

declare(strict_types=1);

namespace Modules\FormX\Models\Panels;

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class HomePanel.
 */
class HomePanel extends XotBasePanel {
    public static string $model = 'Modules\Xot\Models\Home';

    public function actions(): array {

        if(class_exists('\Modules\Geo\Models\Panels\Actions\FillplacesAction')){
            return [
                new Actions\FullcalendarAction(),
                new Actions\TestAction(),
                new \Modules\Geo\Models\Panels\Actions\FillplacesAction(),
                new Actions\FilleventsAction(),
            ];
        }else{
            return [
                new Actions\FullcalendarAction(),
                new Actions\TestAction(),                
                new Actions\FilleventsAction(),
            ];
        }
    }
}

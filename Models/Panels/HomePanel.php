<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
namespace Modules\FormX\Models\Panels;

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class HomePanel.
 */
class HomePanel extends XotBasePanel {
    public static string $model = 'Modules\Xot\Models\Home';

    public function actions(): array {
        return [
            new Actions\FullcalendarAction(),
            new Actions\TestAction(),
<<<<<<< HEAD
=======
            new Actions\FillplacesAction(),
            new Actions\FilleventsAction(),
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
        ];
    }
}
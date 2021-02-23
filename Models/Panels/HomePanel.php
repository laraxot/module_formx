<<<<<<< HEAD
<?php

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
        ];
    }
=======
<?php

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
        ];
    }
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
}
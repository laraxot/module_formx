<?php

declare(strict_types=1);

namespace Modules\FormX\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class InputPanel.
 */
class InputPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\FormX\Models\Input';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'type',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'sub_type',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(Request $request = null): array {
        return [
            new Actions\SyncInputs(),
        ];
    }
}

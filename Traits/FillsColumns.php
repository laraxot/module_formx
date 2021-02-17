<?php

namespace Modules\FormX\Traits;

/*
 * https://github.com/kdion4891/laravel-livewire-forms/blob/master/src/Traits/FillsColumns.php

 */

use Illuminate\Support\Facades\Schema;

/**
 * Trait FillsColumns
 * @package Modules\FormX\Traits
 */
trait FillsColumns {
    /**
     * @return array
     */
    public function getFillable() {
        return Schema::getColumnListing($this->getTable());
    }
}

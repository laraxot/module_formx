<?php

namespace Modules\FormX\Traits;

/*
 * https://github.com/kdion4891/laravel-livewire-forms/blob/master/src/Traits/FillsColumns.php

 */

use Illuminate\Support\Facades\Schema;

trait FillsColumns {
    public function getFillable() {
        return Schema::getColumnListing($this->getTable());
    }
}

<?php

namespace Modules\FormX\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Carbon\Carbon;

//------services---------

//--- models ---

//--- bases ---
use Modules\Xot\Models\XotBaseModel;

class Input extends XotBaseModel {
    protected $fillable = ['id', 'type', 'sub_type'];
    protected $appends = [];
    protected $casts = [];
    protected $dates = ['created_at', 'updated_at'];
    //protected $primaryKey = 'id';
    public $incrementing = true;
}
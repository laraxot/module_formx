<?php

declare(strict_types=1);

namespace Modules\FormX\Models;

//------services---------

//--- models ---

//--- bases ---
use Modules\Xot\Models\XotBaseModel;

/**
 * Modules\FormX\Models\Input.
 *
 * @property int                             $id
 * @property string|null                     $type
 * @property string|null                     $sub_type
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Input newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Input newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Input query()
 * @method static \Illuminate\Database\Eloquent\Builder|Input whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Input whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Input whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Input whereSubType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Input whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Input whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Input whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Input extends XotBaseModel {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'type', 'sub_type'];
    /**
     * @var array
     */
    protected $appends = [];
    /**
     * @var array
     */
    protected $casts = [];
    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at'];
    //protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
}

<?php

namespace Modules\FormX\Http\Livewire\FullCalendar;

/**
 * https://github.com/asantibanez/livewire-calendar/blob/master/src/LivewireCalendar.php
 */

use Exception;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Collection;
use Modules\Customer\Models\Customer;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LivewireCalendar
 * @package Asantibanez\LivewireCalendar
 * @property Carbon $startsAt
 * @property Carbon $endsAt
 * @property Carbon $gridStartsAt
 * @property Carbon $gridEndsAt
 * @property int $weekStartsAt
 * @property int $weekEndsAt
 * @property string $calendarView
 * @property string $dayView
 * @property string $eventView
 * @property string $dayOfWeekView
 * @property string $beforeCalendarWeekView
 * @property string $afterCalendarWeekView
 * @property string $dragAndDropClasses
 * @property int $pollMillis
 * @property string $pollAction
 * @property boolean $dragAndDropEnabled
 * @property boolean $dayClickEnabled
 * @property boolean $eventClickEnabled
 */
class V2 extends BaseV2{
    private $model=Customer::class;
    public $events;

    public function events() : Collection{
        return app($this->model)->query()
        ->whereDate('date_next_check', '>=', $this->gridStartsAt)
        ->whereDate('date_next_check', '<=', $this->gridEndsAt)
        ->get()
        ->map(function (Model $model) {
            return [
                'id' => $model->id,
                'title' => $model->title,
                'description' => '',//$model->note,
                'date' => $model->date_next_check,
            ];
        });
    }



    public function onDayClick($year, $month, $day){
        //
    }

    public function onEventClick($eventId){

    }

    public function onEventDropped($eventId, $year, $month, $day){
        //
        $row=app($this->model)->find($eventId);
        $row->date_next_check=$year.'-'.$month.'-'.$day;
        $row->save();

    }


}


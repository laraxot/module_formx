<?php

/**
 * https://github.com/asantibanez/livewire-calendar/blob/master/src/LivewireCalendar.php.
 * https://marcocaggiano.medium.com/creating-a-popup-modal-with-laravel-livewire-and-no-jquery-1806736acd82.
 */

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\Calendar;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;
use Modules\Xot\Services\PanelService;

/**
 * Class LivewireCalendar.
 *
 * @property Carbon $startsAt
 * @property Carbon $endsAt
 * @property Carbon $gridStartsAt
 * @property Carbon $gridEndsAt
 * @property int    $weekStartsAt
 * @property int    $weekEndsAt
 * @property string $calendarView
 * @property string $dayView
 * @property string $eventView
 * @property string $dayOfWeekView
 * @property string $beforeCalendarWeekView
 * @property string $afterCalendarWeekView
 * @property string $dragAndDropClasses
 * @property int    $pollMillis
 * @property string $pollAction
 * @property bool   $dragAndDropEnabled
 * @property bool   $dayClickEnabled
 * @property bool   $eventClickEnabled
 */
class V2 extends Component {
    public Carbon $startsAt;
    public Carbon $endsAt;

    public Carbon $gridStartsAt;
    public Carbon $gridEndsAt;

    public int $weekStartsAt;
    public int $weekEndsAt;

    public string $calendarView;
    public string $dayView;
    public string $eventView;
    public string $dayOfWeekView;

    public string $dragAndDropClasses;

    public string $beforeCalendarView;
    public string $afterCalendarView;

    public int $pollMillis;
    public string $pollAction;

    public bool $dragAndDropEnabled;
    public bool $dayClickEnabled;
    public bool $eventClickEnabled;

    public array $form_data = [];

    public string $model;

    public string $form_edit;

    public int $event_id;

    protected array $casts = [
        'startsAt' => 'date',
        'endsAt' => 'date',
        'gridStartsAt' => 'date',
        'gridEndsAt' => 'date',
    ];

    /**
     * @param int       $initialYear
     * @param int       $initialMonth
     * @param int|mixed $weekStartsAt
     * @param mixed     $calendarView
     * @param mixed     $dayView
     * @param mixed     $eventView
     * @param mixed     $dayOfWeekView
     * @param mixed     $dragAndDropClasses
     * @param mixed     $beforeCalendarView
     * @param mixed     $afterCalendarView
     * @param mixed     $pollMillis
     * @param mixed     $pollAction
     * @param mixed     $dragAndDropEnabled
     * @param mixed     $dayClickEnabled
     * @param mixed     $eventClickEnabled
     * @param mixed     $eventClickEnabled
     * @param array     $extras
     */
    public function mount($initialYear = null,
        $initialMonth = null,
        $weekStartsAt = null,
        $calendarView = null,
        $dayView = null,
        $eventView = null,
        $dayOfWeekView = null,
        $dragAndDropClasses = null,
        $beforeCalendarView = null,
        $afterCalendarView = null,
        $pollMillis = null,
        $pollAction = null,
        $dragAndDropEnabled = true,
        $dayClickEnabled = true,
        $eventClickEnabled = true,
        $extras = []): void {
        $this->weekStartsAt = $weekStartsAt ?? Carbon::SUNDAY;
        $this->weekEndsAt = Carbon::SUNDAY == $this->weekStartsAt
            ? Carbon::SATURDAY
            : collect([0, 1, 2, 3, 4, 5, 6])->get($this->weekStartsAt + 6 - 7)
        ;

        $initialYear = $initialYear ?? Carbon::today()->year;
        $initialMonth = $initialMonth ?? Carbon::today()->month;

        $this->startsAt = Carbon::createFromDate($initialYear, $initialMonth, 1)->startOfDay();
        $this->endsAt = $this->startsAt->clone()->endOfMonth()->startOfDay();

        $this->calculateGridStartsEnds();

        $this->setupViews($calendarView, $dayView, $eventView, $dayOfWeekView, $beforeCalendarView, $afterCalendarView);

        $this->setupPoll($pollMillis, $pollAction);

        $this->dragAndDropEnabled = $dragAndDropEnabled;
        $this->dragAndDropClasses = $dragAndDropClasses ?? 'border border-blue-400 border-4';

        $this->dayClickEnabled = $dayClickEnabled;
        $this->eventClickEnabled = $eventClickEnabled;

        $this->afterMount($extras);

        $this->model = 'Modules\Blog\Models\Event';
        //$this->fields = PanelService::get(app($this->model))->fields();
        //dddx($this->fields);
        $panel = PanelService::get(app($this->model));
        $this->form_edit = $panel->formLivewireEdit();
    }

    /**
     * @param array $extras
     */
    public function afterMount($extras = []): void {
    }

    /**
     * @param mixed $calendarView
     * @param mixed $dayView
     * @param mixed $eventView
     * @param mixed $dayOfWeekView
     * @param mixed $beforeCalendarView
     * @param mixed $afterCalendarView
     */
    public function setupViews($calendarView = null,
        $dayView = null,
        $eventView = null,
        $dayOfWeekView = null,
        $beforeCalendarView = null,
        $afterCalendarView = null): void {
        $this->calendarView = $calendarView ?? 'formx::livewire.calendar.v2.calendar';
        $this->dayView = $dayView ?? 'formx::livewire.calendar.v2.day';
        $this->eventView = $eventView ?? 'formx::livewire.calendar.v2.event';
        $this->dayOfWeekView = $dayOfWeekView ?? 'formx::livewire.calendar.v2.day-of-week';

        $this->beforeCalendarView = $beforeCalendarView ?? null;
        $this->afterCalendarView = $afterCalendarView ?? null;
    }

    /**
     * @param mixed $pollMillis
     * @param mixed $pollAction
     */
    public function setupPoll($pollMillis, $pollAction): void {
        $this->pollMillis = $pollMillis;
        $this->pollAction = $pollAction;
    }

    public function goToPreviousMonth(): void {
        $this->startsAt->subMonthNoOverflow();
        $this->endsAt->subMonthNoOverflow();

        $this->calculateGridStartsEnds();
    }

    public function goToNextMonth(): void {
        $this->startsAt->addMonthNoOverflow();
        $this->endsAt->addMonthNoOverflow();

        $this->calculateGridStartsEnds();
    }

    public function goToCurrentMonth(): void {
        $this->startsAt = Carbon::today()->startOfMonth()->startOfDay();
        $this->endsAt = $this->startsAt->clone()->endOfMonth()->startOfDay();

        $this->calculateGridStartsEnds();
    }

    public function calculateGridStartsEnds(): void {
        $this->gridStartsAt = $this->startsAt->clone()->startOfWeek($this->weekStartsAt);
        $this->gridEndsAt = $this->endsAt->clone()->endOfWeek($this->weekEndsAt);
    }

    public function monthGrid(): Collection {
        $firstDayOfGrid = $this->gridStartsAt;
        $lastDayOfGrid = $this->gridEndsAt;

        $numbersOfWeeks = $lastDayOfGrid->diffInWeeks($firstDayOfGrid) + 1;
        $days = $lastDayOfGrid->diffInDays($firstDayOfGrid) + 1;

        if (0 != $days % 7) {
            throw new Exception('Livewire Calendar not correctly configured. Check initial inputs.');
        }

        $monthGrid = collect();
        $currentDay = $firstDayOfGrid->clone();

        while (! $currentDay->greaterThan($lastDayOfGrid)) {
            $monthGrid->push($currentDay->clone());
            $currentDay->addDay();
        }

        $monthGrid = $monthGrid->chunk(7);
        if ($numbersOfWeeks != $monthGrid->count()) {
            throw new Exception('Livewire Calendar calculated wrong number of weeks. Sorry :(');
        }

        return $monthGrid;
    }

    public function events(): Collection {
        $this->model = 'Modules\Blog\Models\Event';
        $events = app($this->model)->with('post')
            ->whereDate('date_start', '>=', $this->gridStartsAt)
            ->whereDate('date_start', '<=', $this->gridEndsAt)
            ->get()
            ->map(function ($model) {
                return [
                    'id' => $model->id,
                    'title' => $model->title,
                    'description' => '', //$model->note,
                    'date' => $model->date_start->toDateTimeLocalString(),
                    'start' => $model->date_start->toDateTimeLocalString(),
                    'end' => $model->date_end->toDateTimeLocalString(),
                    //'start' => '2020-12-09T12:30:00',
                ];
            }); //->all();

        return $events;

        //return collect();
    }

    public function getEventsForDay(mixed $day, Collection $events): Collection {
        return $events
            ->filter(function ($event) use ($day) {
                return Carbon::parse($event['date'])->isSameDay($day);
            });
    }

    /*public function onDayClick($year, $month, $day): void {
    }*/

    public function onEventClick(int $eventId): void {
        $this->event_id = $eventId;
        $row = app($this->model)->find($eventId);
        $panel = PanelService::get($row);
        $fields = $panel->getFields(['act' => 'edit']);
        /*
        $this->form_data = collect($fields)
            ->keyBy('name')
            ->map(
                function ($item) use ($row) {
                    return Arr::get($row, $item->name);
                }
            )
            ->all();
        */
        foreach ($fields as $field) {
            $value = Arr::get($row, $field->name);
            if (is_object($value)) {
                switch (get_class($value)) {
                    case 'Illuminate\Support\Carbon':
                        $value = $value->format('Y-m-d\TH:i');
                        break;
                    default:
                        dddx([get_class($value)]);
                    break;
                }
            }
            Arr::set($this->form_data, $field->name, $value);
        }

        //dddx($this->form_data);
    }

    public function update(): void {
        $row = app($this->model)->find($this->event_id);
        $panel = PanelService::get($row);
        $panel->update($this->form_data);
    }

    public function cancel(): void {
    }

    /*public function onEventDropped($eventId, $year, $month, $day): void {
    }*/

    /**
     * Render the component.
     *
     * @throws Exception
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render() {
        $events = $this->events();
        $view = $this->calendarView;
        $view_params = [
            'componentId' => $this->id,
            'monthGrid' => $this->monthGrid(),
            'events' => $events,
            'getEventsForDay' => function ($day) use ($events) {
                return $this->getEventsForDay($day, $events);
            },
        ];

        return view()->make($view, $view_params);
    }
}

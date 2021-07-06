<?php
/**
 * https://github.com/asantibanez/livewire-calendar/blob/master/src/LivewireCalendar.php.
 * https://marcocaggiano.medium.com/creating-a-popup-modal-with-laravel-livewire-and-no-jquery-1806736acd82.
*/

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\Calendar;

use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\View\Factory;
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
    public $startsAt;
    public $endsAt;

    public $gridStartsAt;
    public $gridEndsAt;

    public $weekStartsAt;
    public $weekEndsAt;

    public $calendarView;
    public $dayView;
    public $eventView;
    public $dayOfWeekView;

    public $dragAndDropClasses;

    public $beforeCalendarView;
    public $afterCalendarView;

    public $pollMillis;
    public $pollAction;

    public $dragAndDropEnabled;
    public $dayClickEnabled;
    public $eventClickEnabled;

    public array $form_data = [];

    public string $model;

    public string $form_edit;

    public ?int $event_id = null;

    protected $casts = [
        'startsAt' => 'date',
        'endsAt' => 'date',
        'gridStartsAt' => 'date',
        'gridEndsAt' => 'date',
    ];

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

    public function afterMount($extras = []): void {
    }

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

    /**
     * @throws Exception
     */
    public function monthGrid() {
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

    public function getEventsForDay($day, Collection $events): Collection {
        return $events
            ->filter(function ($event) use ($day) {
                return Carbon::parse($event['date'])->isSameDay($day);
            });
    }

    public function onDayClick($year, $month, $day): void {
        /*
        if (null == $this->event_id) { //non sto clikkando un evento
            dddx('preso '.$this->event_id);
        }
        */
    }

    public function onEventClick($eventId): void {
        $this->event_id = (int) $eventId;
        $row = app($this->model)->find($eventId);
        $panel = PanelService::get($row);
        $this->form_data = $panel->getFormData(['act' => 'edit']);
    }

    public function update(): void {
        $row = app($this->model)->find($this->event_id);
        $panel = PanelService::get($row);
        $panel->update($this->form_data);

        $this->form_data = [];
        $this->event_id = null;
    }

    public function cancel(): void {
        $this->form_data = [];
        $this->event_id = null;
    }

    public function onEventDropped($eventId, $year, $month, $day): void {
        dddx('dropped');
    }

    /**
     * @throws Exception
     *
     * @return Factory|View
     */
    public function render() {
        $events = $this->events();

        return view($this->calendarView)
            ->with([
                'componentId' => $this->id,
                'monthGrid' => $this->monthGrid(),
                'events' => $events,
                'getEventsForDay' => function ($day) use ($events) {
                    return $this->getEventsForDay($day, $events);
                },
            ]);
    }
}
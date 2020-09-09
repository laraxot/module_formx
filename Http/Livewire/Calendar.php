<?php

namespace Modules\FormX\Http\Livewire;

use Illuminate\Session\SessionManager;
use Illuminate\Support\Carbon;
use Livewire\Component;

//use Modules\Cart\Models\BookingItem;

/**
 * full calendar
 * https://github.com/asantibanez/livewire-calendar
 * https://github.com/stijnvanouplines/livewire-calendar/blob/master/app/Http/Livewire/Calendar.php.
 */
class Calendar extends Component {
    public $minDate;
    public $maxDate;

    public $selectedDay;
    public $selectedMonth;
    public $selectedYear;

    public $currentMonth;
    public $currentYear;
    //----------------------------------
    public $guest_num;

    public $containers;
    public $items;
    public $last_item;

    public function mount(SessionManager $session, string $minDate = null, string $maxDate = null) {
        $session->put('calendar.now', now());

        $this->minDate = $minDate;
        $this->maxDate = $maxDate;

        $this->guest_num = 1;

        $this->setDate();

        [$this->containers, $this->items] = params2ContainerItem();
        $this->last_item = last($this->items);
    }

    private function setDate(): void {
        $this->selectedDay = session('calendar.now')->day;
        $this->selectedMonth = $this->currentMonth = session('calendar.now')->month;
        $this->selectedYear = $this->currentYear = session('calendar.now')->year;
    }

    public function calendar(): array {
        $days = [];

        $startOfMonthDay = Carbon::createFromDate($this->currentYear, $this->currentMonth)->startOfMonth()->isoWeekday();
        for ($i = 1; $i < $startOfMonthDay; ++$i) {
            $days[] = null;
        }

        $daysInMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth)->daysInMonth;
        for ($i = 1; $i <= $daysInMonth; ++$i) {
            $days[] = $i;
        }

        $endOfMonthDay = Carbon::createFromDate($this->currentYear, $this->currentMonth)->endOfMonth()->isoWeekday();
        for ($i = 7; $i > $endOfMonthDay; --$i) {
            $days[] = null;
        }

        $daysArray = collect($days)->map(function ($day) {
            return [
                'day' => $day,
                'current' => $this->isCurrentDay($day),
                'selected' => $this->isDaySelected($day),
                'disabled' => $this->isDayDisabled($day),
            ];
        })
            ->toArray();

        return array_chunk($daysArray, 7);
    }

    private function isCurrentDay(int $day = null): bool {
        if ($day !== session('calendar.now')->day) {
            return false;
        }

        if ($this->currentMonth !== session('calendar.now')->month) {
            return false;
        }

        if ($this->currentYear !== session('calendar.now')->year) {
            return false;
        }

        return true;
    }

    private function isDaySelected(int $day = null): bool {
        if ($day !== $this->selectedDay) {
            return false;
        }

        if ($this->currentMonth !== $this->selectedMonth) {
            return false;
        }

        if ($this->currentYear !== $this->selectedYear) {
            return false;
        }

        return true;
    }

    private function isDayDisabled(int $day = null): bool {
        if (null === $day) {
            return true;
        }

        if (
            $this->currentMonth === Carbon::parse($this->minDate)->month
            && $this->currentYear === Carbon::parse($this->minDate)->year
            && $day < Carbon::parse($this->minDate)->day
        ) {
            return true;
        }

        if (
            $this->currentMonth === Carbon::parse($this->maxDate)->month
            && $this->currentYear === Carbon::parse($this->maxDate)->year
            && $day < Carbon::parse($this->maxDate)->day
        ) {
            return true;
        }

        return false;
    }

    public function setByMonth(int $month): void {
        if ($month > 12) {
            $this->currentYear = $this->currentYear + 1;

            $this->currentMonth = 1;

            return;
        }

        if ($month < 1) {
            $this->currentYear = $this->currentYear - 1;

            $this->currentMonth = 12;

            return;
        }

        $this->currentMonth = $month;
    }

    public function setByDay(int $day = null): void {
        if (is_null($day)) {
            return;
        }

        $this->selectedYear = $this->currentYear;
        $this->selectedMonth = $this->currentMonth;
        $this->selectedDay = $day;
    }

    public function showPreviousArrow(): bool {
        if (! $this->minDate) {
            return true;
        }

        if (
            Carbon::parse($this->minDate)->year === $this->currentYear
            && Carbon::parse($this->minDate)->month === $this->currentMonth
        ) {
            return false;
        }

        return true;
    }

    public function showNextArrow(): bool {
        if (! $this->maxDate) {
            return true;
        }

        if (
            Carbon::parse($this->maxDate)->year === $this->currentYear
            && Carbon::parse($this->maxDate)->month === $this->currentMonth
        ) {
            return false;
        }

        return true;
    }

    public function render() {
        $guest_num = (int) $this->guest_num;
        //-- da vedere come passare i parametri
        $this->items = $this->last_item->bookingItems()->whereRaw($guest_num.' between min_capacity and max_capacity')->get();
        $this->opening_hours = $this->last_item->openingHours;

        return view('formx::livewire.calendar', [
            'calendar' => $this->calendar(),
            'items' => $this->items,
        ]);
    }
}

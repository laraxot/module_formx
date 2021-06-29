<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire\Calendar;

use Illuminate\Session\SessionManager;
use Illuminate\Support\Carbon;
/*
 * https://laravelplayground.com/#/snippets/8e785494-5a75-4c25-a92d-97ae16e71554
 * https://github.com/stijnvanouplines/livewire-calendar/blob/master/app/Http/Livewire/Calendar.php
 */

use Livewire\Component;

/**
 * Modules\FormX\Http\Livewire\Calendar\V1.
 */
class Stringlist extends Component {
    public $minDate;

    public $maxDate;

    public $selectedDay;

    public $selectedMonth;

    public $selectedYear;

    public $currentMonth;

    public $currentYear;
     
    public $date_list;

    public $input_name;

    public function mount(SessionManager $session, string $minDate = null, string $maxDate = null, string $date_list=null, string $input_name): void {
        $first_date=collect(explode(',',$date_list))->filter(function($value){return !empty($value); })->first();
        if($first_date==null){
            $first_date=Carbon::now();
        }else{
            $first_date=Carbon::createFromFormat('d/m/Y',$first_date);
        }

        
        
        $session->put('calendar.now', $first_date);
        $this->date_list=$date_list;
        $this->input_name = $input_name;
        $this->minDate = $minDate;
        $this->maxDate = $maxDate;

        $this->setDate();
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

    // mi evidenzia i giorni
    private function isDaySelected(int $day = null): bool {
        $date_selected=$day.'/'.$this->currentMonth.'/'.$this->currentYear;
        return in_array($date_selected,explode(',',$this->date_list));
        /*
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
        */
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
        /*
        $this->selectedYear = $this->currentYear;
        $this->selectedMonth = $this->currentMonth;
        $this->selectedDay = $day;
        */
        $arr=explode(',',$this->date_list);
        $collect=collect($arr);
        $date=$day.'/'.$this->currentMonth.'/'.$this->currentYear;
        $i=$collect->search($date);
        if($i!==false){
            $collect=$collect->forget($i);
        }else{
            $collect=$collect->merge($date);
        }
        $collect=$collect->filter(
            function($value){ 
                return !empty($value);
            }
            )->unique();
        $this->date_list=$collect->implode(',');
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
        $view = 'formx::livewire.calendar.string_list';
        $view_params = [
            'view' => $view,
            'calendar' => $this->calendar(),
        ];

        return view($view, $view_params);
    }
}
<?php

namespace Modules\FormX\Http\Livewire;

/*
 * https://laravelplayground.com/#/snippets/8e785494-5a75-4c25-a92d-97ae16e71554

 */

use Illuminate\Support\Str;
use Livewire\Component;

class FullCalendar extends Component {
    public $name = 'Barry';
    public $events = []; //non sono gli eventi in calendario ma le azioni
    public $form_data = [];

    public function mount() {
        /*$name = 'Barry';
        $events = [];
        foreach (range(0, 6) as $i) {
            $events[] = [
                'id' => uniqid(),
                'title' => Str::random(4).$name,
                'start' => now()->addDay(random_int(-10, 10))->toDateString(),
            ];
        }
        $this->events = $events;
        */
    }

    public function updatedName() {
        $this->emit('refreshCalendar');
    }

    public function getNamesProperty() {
        return [
            'Barry',
            'Taylor',
            'Caleb',
        ];
    }

    public function getEvents() {
        //dddx('preso');
        $name = 'Barry'; // $request->get('name');

        $events = [];
        foreach (range(0, 6) as $i) {
            $events[] = [
                'id' => uniqid(),
                'title' => Str::random(4).$name,
                'start' => now()->addDay(random_int(-10, 10))->toDateString(),
            ];
        }
        //$this->events = $events;
        return $events;
    }

    public function getTasksProperty() {
        switch ($this->name) {
          case 'Barry':
            return ['Debugbar', 'IDE Helper'];
          case 'Taylor':
            return ['Laravel', 'Jetstream'];
          case 'Caleb':
            return ['Livewire', 'Sushi'];
        }

        return [];
    }

    public function eventReceive($event) {
        $this->events[] = 'eventReceive: '.print_r($event, true);
    }

    public function eventDrop($event, $oldEvent) {
        $this->events[] = 'eventDrop: '.print_r($oldEvent, true).' -> '.print_r($event, true);
    }

    public function render() {
        return view('formx::livewire.full_calendar');
    }

    public function edit($calEvent) {
        $this->form_data = $calEvent['event'];
    }

    public function update() {
        session()->flash('message', 'Users Updated Successfully.');
        $this->resetInputFields();
    }

    public function cancel() {
        //$this->updateMode = false;
        $this->resetInputFields();
    }

    private function resetInputFields() {
        $this->form_data = [];
    }
}

<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

/*
 * https://laravelplayground.com/#/snippets/8e785494-5a75-4c25-a92d-97ae16e71554

 */

use Illuminate\Support\Str;
use Livewire\Component;

/**
 * Class FullCalendar.
 */
class FullCalendar extends Component {
    /**
     * @var string
     */
    public ?string $name = 'Barry';

    public array $events = []; //non sono gli eventi in calendario ma le azioni

    public array $form_data = [];

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

    /**
     * @return string[]
     */
    public function getNamesProperty() {
        return [
            'Barry',
            'Taylor',
            'Caleb',
        ];
    }

    /**
     * @throws \Exception
     *
     * @return array
     */
    public function getEvents() {
        //dddx('preso');
        $name = 'Barry'; // $request->get('name');

        $events = [];
        foreach (range(0, 6) as $i) {
            $events[] = [
                'id' => uniqid(),
                'title' => Str::random(4).$name,
                'start' => now()->addDays(random_int(-10, 10))->toDateString(),
            ];
        }
        //$this->events = $events;
        return $events;
    }

    /**
     * @return array|string[]
     */
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

    public function eventReceive(array $event): void {
        $this->events[] = 'eventReceive: '.print_r($event, true);
    }

    public function eventDrop(array $event, array $oldEvent): void {
        $this->events[] = 'eventDrop: '.print_r($oldEvent, true).' -> '.print_r($event, true);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        return view('formx::livewire.full_calendar');
    }

    public function edit(array $calEvent) {
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
=======
<?php

declare(strict_types=1);

namespace Modules\FormX\Http\Livewire;

/*
 * https://laravelplayground.com/#/snippets/8e785494-5a75-4c25-a92d-97ae16e71554

 */

use Illuminate\Support\Str;
use Livewire\Component;

/**
 * Class FullCalendar.
 */
class FullCalendar extends Component {
    /**
     * @var string
     */
    public ?string $name = 'Barry';

    public array $events = []; //non sono gli eventi in calendario ma le azioni

    public array $form_data = [];

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

    /**
     * @return string[]
     */
    public function getNamesProperty() {
        return [
            'Barry',
            'Taylor',
            'Caleb',
        ];
    }

    /**
     * @throws \Exception
     *
     * @return array
     */
    public function getEvents() {
        //dddx('preso');
        $name = 'Barry'; // $request->get('name');

        $events = [];
        foreach (range(0, 6) as $i) {
            $events[] = [
                'id' => uniqid(),
                'title' => Str::random(4).$name,
                'start' => now()->addDays(random_int(-10, 10))->toDateString(),
            ];
        }
        //$this->events = $events;
        return $events;
    }

    /**
     * @return array|string[]
     */
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

    public function eventReceive(array $event): void {
        $this->events[] = 'eventReceive: '.print_r($event, true);
    }

    public function eventDrop(array $event, array $oldEvent): void {
        $this->events[] = 'eventDrop: '.print_r($oldEvent, true).' -> '.print_r($event, true);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        return view('formx::livewire.full_calendar');
    }

    public function edit(array $calEvent) {
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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

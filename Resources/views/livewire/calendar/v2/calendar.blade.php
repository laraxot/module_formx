<div @if ($pollMillis !== null && $pollAction !== null) wire:poll.{{ $pollMillis }}ms="{{ $pollAction }}"
@elseif($pollMillis !== null)
        wire:poll.{{ $pollMillis }}ms @endif>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.16/tailwind.min.css"
        integrity="sha512-bCrETtEVhxwUaYXKR7LeP4wkzfqBrjL2H/u0c7tKRnZGLqatfZzSB+VvG3vCszHoo+QeWOl467pRgsRaXPyZPA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div>
        @includeIf($beforeCalendarView)
        <button wire:click="goToPreviousMonth">PREV</button>
        <h1>{{ $startsAt->monthName }}</h1>
        <button wire:click="goToNextMonth">NEXT</button>
    </div>


    <div class="flex">
        <div class="overflow-x-auto w-full">
            <div class="inline-block min-w-full overflow-hidden">

                <div class="w-full flex flex-row">
                    @foreach ($monthGrid->first() as $day)
                        @include($dayOfWeekView, ['day' => $day])
                    @endforeach
                </div>

                @foreach ($monthGrid as $week)
                    <div class="w-full flex flex-row">
                        @foreach ($week as $day)
                            @include($dayView, [
                            'componentId' => $componentId,
                            'day' => $day,
                            'dayInMonth' => $day->isSameMonth($startsAt),
                            'isToday' => $day->isToday(),
                            'events' => $getEventsForDay($day, $events),
                            ])
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div>
        @includeIf($afterCalendarView)
    </div>
</div>

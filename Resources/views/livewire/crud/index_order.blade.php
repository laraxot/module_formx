@php
    Theme::add('https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js');
    
@endphp
<div>
    <ul wire:sortable="updateTaskOrder">
        @foreach ($rows as $row)
            <li wire:sortable.item="{{ $row->id }}" wire:key="task-{{ $row->id }}">
                <h4 wire:sortable.handle>{{ $row->title }}</h4>
                <button wire:click="removeTask({{ $row->id }})">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
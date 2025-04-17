
@php
    //dddx(get_defined_vars());
    //dddx($_panel->getRow()->{$name});
@endphp
@livewire('formx::chip.simple', ['row' => $_panel->getRow(),'name' => $name])

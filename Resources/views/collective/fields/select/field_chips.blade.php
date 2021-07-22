
@php
    //dddx(get_defined_vars());
    //dddx($_panel->row->{$name});
@endphp
@livewire('formx::chip.simple', ['row' => $_panel->row,'name' => $name])
<<<<<<< HEAD
@php
//dddx(get_defined_vars());
@endphp 
@foreach($field->value as $row)
    @php
        $row_panel=Panel::get($row);
    @endphp
    <h6>
    <span class="badge badge-pill badge-secondary">
        {{ $row_panel->optionLabel($row)}}
    </span>
    </h6>
=======
@php
//dddx(get_defined_vars());
@endphp 
@foreach($field->value as $row)
    @php
        $row_panel=Panel::get($row);
    @endphp
    <h6>
    <span class="badge badge-pill badge-secondary">
        {{ $row_panel->optionLabel($row)}}
    </span>
    </h6>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
@endforeach
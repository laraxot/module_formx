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
@endforeach
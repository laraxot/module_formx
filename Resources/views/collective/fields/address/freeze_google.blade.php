<<<<<<< HEAD
<<<<<<< HEAD
@if (is_array($field->value))
    {{ $field->value['value'] }}
@else
    @php
        //dddx(get_defined_vars());
    @endphp
    {{ $row->route }}, {{ $row->street_number }}<br />
    {{ $row->locality }}, {{ $row->administrative_area_level_2 }}, {{ $row->country }}
@endif
=======
@if (is_array($field->value))
    {{ $field->value['value'] }}
@else
    @php
        //dddx(get_defined_vars());
    @endphp
    {{ $row->route }}, {{ $row->street_number }}<br />
    {{ $row->locality }}, {{ $row->administrative_area_level_2 }}, {{ $row->country }}
@endif
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@if (is_array($field->value))
    {{ $field->value['value'] }}
@else
    @php
        //dddx(get_defined_vars());
    @endphp
    {{ $row->route }}, {{ $row->street_number }}<br />
    {{ $row->locality }}, {{ $row->administrative_area_level_2 }}, {{ $row->country }}
@endif
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

<<<<<<< HEAD
<<<<<<< HEAD
@foreach($field->value as $row)
    @php
        $row_panel=Panel::get($row);
    @endphp
    <span class="badge badge-secondary">
        {{ $row_panel->optionLabel($row)}}
    </span>
@endforeach

=======
@foreach($field->value as $row)
    @php
        $row_panel=Panel::get($row);
    @endphp
    <span class="badge badge-secondary">
        {{ $row_panel->optionLabel($row)}}
    </span>
@endforeach

>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@foreach($field->value as $row)
    @php
        $row_panel=Panel::get($row);
    @endphp
    <span class="badge badge-secondary">
        {{ $row_panel->optionLabel($row)}}
    </span>
@endforeach

>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

<<<<<<< HEAD
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
@foreach($field->value as $row)
    @php
        $row_panel=Panel::get($row);
    @endphp
    <h6>
    <span class="badge badge-pill badge-secondary">
        {{ $row_panel->optionLabel($row)}}
    </span>
    </h6>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endforeach
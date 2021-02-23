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

>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

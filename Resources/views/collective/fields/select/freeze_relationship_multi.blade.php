@foreach($field->value as $row)
    @php
        $row_panel=Panel::get($row);
    @endphp
    <span class="badge badge-secondary">
        {{ $row_panel->optionLabel($row)}}
    </span>
@endforeach


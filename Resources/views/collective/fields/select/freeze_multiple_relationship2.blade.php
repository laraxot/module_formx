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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endforeach
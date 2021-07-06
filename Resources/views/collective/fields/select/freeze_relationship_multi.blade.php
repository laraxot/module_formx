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

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

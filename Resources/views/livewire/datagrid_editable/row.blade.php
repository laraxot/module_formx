@php
    //dddx($row);

@endphp
<div>

    @foreach($this->fields as $field)
        @php
            //dddx($field);
        @endphp
        <td>
            {{ $field->type }} - 
            {{ $index }}
            {{-- $field->setPrefix('rows.'.$index)->html($form_data,$row) --}}
            {{ $field->setPrefix('rows.'.$index)->html($row) }}
        </td>
    @endforeach
</div>
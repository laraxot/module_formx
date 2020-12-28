<tr wire:ignore>
    @foreach($fields as $field)
        @php
            //dddx($field);
        @endphp
        <td>

            {{-- $field->setPrefix('rows.'.$index)->html($form_data,$row) --}}
            {{--

            --}}

            {{ $field->setPrefix('rows.'.$index)->html() }}

            {{--
            {{ $field->html() }}
            --}}
        </td>
    @endforeach
</tr>

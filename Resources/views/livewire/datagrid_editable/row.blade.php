@php
    //dddx([$form_data, $fields]);

@endphp
<div>
    @foreach($fields as $field)
        <td wire:key="row-field-{{ $index }}">
            {{ $field->setPrefix('rows.'.$index)->html($form_data, $row) }}
        </td>
    @endforeach
</div>
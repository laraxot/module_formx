<div>
    @foreach($fields as $field)
        <td> {{ $field->setPrefix('rows.'.$index)->html($form_data) }}</td>
    @endforeach
</div>
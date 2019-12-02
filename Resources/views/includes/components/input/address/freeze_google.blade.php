@if(is_array($field->value))
	{{ $field->value['value'] }}
@else
{{ $field->value }}
@endif
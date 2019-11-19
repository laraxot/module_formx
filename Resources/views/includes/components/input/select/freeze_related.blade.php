@php
	$class=$field->related_class;
	$obj=$class::find($field->value);
@endphp
{{ $field->value }}]{{ $obj->nome }}

@php
	$node=class_basename($row).'-'.$field->value;
@endphp
<a href="#{{ $node }}" id="{{ $node }}">{{ $field->value }}</a>
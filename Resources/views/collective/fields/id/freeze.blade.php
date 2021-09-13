@php
$node = class_basename($row) . '-' . $field->value;

//<a href="#{{ $node }}" id="{{ $node }}">{{ $field->value }}</a> perchè un link?

@endphp
{{ $field->value }}

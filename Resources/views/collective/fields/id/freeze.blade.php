<<<<<<< HEAD
@php
	$node=class_basename($row).'-'.$field->value;
@endphp
=======
@php
	$node=class_basename($row).'-'.$field->value;
@endphp
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
<a href="#{{ $node }}" id="{{ $node }}">{{ $field->value }}</a>
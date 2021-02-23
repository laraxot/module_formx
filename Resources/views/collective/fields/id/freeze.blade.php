<<<<<<< HEAD
@php
	$node=class_basename($row).'-'.$field->value;
@endphp
=======
@php
	$node=class_basename($row).'-'.$field->value;
@endphp
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
<a href="#{{ $node }}" id="{{ $node }}">{{ $field->value }}</a>
@php
	$include=$field->view.'_'.$field->sub_type;
@endphp
{{-- $field->value --}}
@include($include)
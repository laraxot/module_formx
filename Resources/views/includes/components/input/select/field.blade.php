@php
	$field=transFields(get_defined_vars());
	if(!isset($field->sub_type)) $field->sub_type='default';
	$include=$comp_view.'_'.$field->sub_type;
@endphp
@include($include)
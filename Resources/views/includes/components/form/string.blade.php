@php
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
@endphp
@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, $field->attributes) }}
	@endslot
@endcomponent
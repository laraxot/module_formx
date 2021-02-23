<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, array_merge(['class' => 'form-control','placeholder'=>$field->placeholder], $attributes)) }}
	@endslot
=======
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, array_merge(['class' => 'form-control','placeholder'=>$field->placeholder], $attributes)) }}
	@endslot
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endcomponent
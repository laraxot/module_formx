<<<<<<< HEAD
<<<<<<< HEAD
@php
	//dddx(get_defined_vars());
	$options=[];
	extract($attributes);
	$field=transFields(get_defined_vars());
	//dddx($field->label);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
	//dddx(get_defined_vars());
	$options=[];
	extract($attributes);
	$field=transFields(get_defined_vars());
	//dddx($field->label);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
	//dddx(get_defined_vars());
	$options=[];
	extract($attributes);
	$field=transFields(get_defined_vars());
	//dddx($field->label);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

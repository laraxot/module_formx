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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

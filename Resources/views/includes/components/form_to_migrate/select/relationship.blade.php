<<<<<<< HEAD
@php
	$row=Form::getModel();
	//ddd(get_defined_vars());
	//dd(get_defined_vars()['__data']);
	//$opts=$
	$field=$options['field'];
	$rows=$row->{$field->relationship}();
	/*
	$related=$rows->getRelated();
	ddd($related);
	*/
	$opts=$rows->all();
	$field=transFields(get_defined_vars());
	//$field=transFields(get_defined_vars());
	//ddd($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
	$row=Form::getModel();
	//ddd(get_defined_vars());
	//dd(get_defined_vars()['__data']);
	//$opts=$
	$field=$options['field'];
	$rows=$row->{$field->relationship}();
	/*
	$related=$rows->getRelated();
	ddd($related);
	*/
	$opts=$rows->all();
	$field=transFields(get_defined_vars());
	//$field=transFields(get_defined_vars());
	//ddd($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

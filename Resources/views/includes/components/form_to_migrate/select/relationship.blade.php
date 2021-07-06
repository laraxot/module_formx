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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

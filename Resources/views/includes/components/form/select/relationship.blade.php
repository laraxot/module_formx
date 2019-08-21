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
	//$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
	//ddd($field);
@endphp

@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent

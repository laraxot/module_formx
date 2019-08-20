@php

	$options=[];
	extract($attributes);
	/*
	//ddd($options);
	if(!isset($view)){
		$view=$comp_view;
	}
	$label=isset($attributes['label'])?$attributes['label']:trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
	*/
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
	//ddd($field->attributes);
@endphp

@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent

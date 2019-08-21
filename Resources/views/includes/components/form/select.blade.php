@php
<<<<<<< HEAD
	$options=[];
	extract($attributes);
=======

	$options=[];
	extract($attributes);
	/*
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492
	//ddd($options);
	if(!isset($view)){
		$view=$comp_view;
	}
	$label=isset($attributes['label'])?$attributes['label']:trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
<<<<<<< HEAD
=======
	*/
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
	//ddd($field->attributes);
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492
@endphp

@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
<<<<<<< HEAD
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value,array_merge(['class' => 'form-control','placeholder'=>$placeholder] )) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
=======
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492
	@endslot
@endcomponent

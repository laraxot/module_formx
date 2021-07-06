<<<<<<< HEAD
@php
	$related_class=($options['field']->related_class);
	//ddd(get_defined_vars());
	$field=transFields(get_defined_vars());
	//Category::pluck('name', 'id')
	//$opts=['1'=>'test','2'=>'prova'];
	$opts=$related_class::pluck('nome','id');
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')

		{{ Form::select($name, $opts,$value, $field->attributes) }}
	@endslot
=======
@php
	$related_class=($options['field']->related_class);
	//ddd(get_defined_vars());
	$field=transFields(get_defined_vars());
	//Category::pluck('name', 'id')
	//$opts=['1'=>'test','2'=>'prova'];
	$opts=$related_class::pluck('nome','id');
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')

		{{ Form::select($name, $opts,$value, $field->attributes) }}
	@endslot
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endcomponent
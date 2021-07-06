<<<<<<< HEAD
@php
$field=transFields(get_defined_vars());
//dddx(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::number($name,$value, $field->attributes) }}
    @endslot
=======
@php
$field=transFields(get_defined_vars());
//dddx(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::number($name,$value, $field->attributes) }}
    @endslot
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endcomponent
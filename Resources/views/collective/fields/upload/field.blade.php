<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::file($name, $value, $field->attributes) }}
	@endslot
@endcomponent

{{--
    https://appdividend.com/2018/08/15/laravel-file-upload-example/

    --}}
=======
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::file($name, $value, $field->attributes) }}
	@endslot
@endcomponent

{{--
    https://appdividend.com/2018/08/15/laravel-file-upload-example/

    --}}
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

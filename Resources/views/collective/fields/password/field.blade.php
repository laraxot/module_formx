<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::password($name, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::password($name, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

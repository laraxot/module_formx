<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
	<i class="fas fa-key" title="{{ $name }}"></i>
	@endslot
	@slot('input')
	{{ Form::getValueAttribute($name) }}
	@endslot
=======
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
	<i class="fas fa-key" title="{{ $name }}"></i>
	@endslot
	@slot('input')
	{{ Form::getValueAttribute($name) }}
	@endslot
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endcomponent
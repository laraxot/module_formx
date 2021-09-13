<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
@endcomponent
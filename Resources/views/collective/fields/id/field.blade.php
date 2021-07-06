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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endcomponent
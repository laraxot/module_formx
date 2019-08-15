@php
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
@endphp
@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
	<i class="fas fa-key" title="{{ $name }}"></i>
	@endslot
	@slot('input')
	{{ Form::getValueAttribute($name) }}
	@endslot
@endcomponent
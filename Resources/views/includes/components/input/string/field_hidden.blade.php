@php
	$field=transFields(get_defined_vars());
	//dddx($field);
@endphp
<span class="d-none">
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label form-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, $field->attributes) }}
	@endslot
@endcomponent
</span>

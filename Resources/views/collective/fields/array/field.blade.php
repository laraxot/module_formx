<<<<<<< HEAD
TO DO ARRAY FIELD
{{-- @php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component, get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, $field->attributes) }} 
	@endslot
@endcomponent --}}
@php
//dddx(get_defined_vars());
// $comp_ns = formx::includes.components.input.array
Theme::add($comp_ns . '/js/boh.js');
//Theme::add($comp_ns.'/css/boh.css');
@endphp
=======
TO DO ARRAY FIELD
{{-- @php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component, get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, $field->attributes) }} 
	@endslot
@endcomponent --}}
@php
//dddx(get_defined_vars());
// $comp_ns = formx::includes.components.input.array
Theme::add($comp_ns . '/js/boh.js');
//Theme::add($comp_ns.'/css/boh.css');
@endphp
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

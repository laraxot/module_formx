@php
	Theme::add('pub_theme::dist/js/form.js');
	$field=transFields(get_defined_vars());
	$field->attributes['class']='form-control tinymce'
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::textarea($name, $value, $field->attributes) }}
	@endslot
@endcomponent

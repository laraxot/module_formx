<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<div class="input-group">
		{{ Form::number($name, $value, array_merge(['class' => 'form-control','step'=>"0.01"], $attributes)) }}
		<span class="input-group-addon">
            <span {{--class="glyphicon glyphicon-calendar"--}}>.xx</span>
        </span>
        </div>
	@endslot
=======
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<div class="input-group">
		{{ Form::number($name, $value, array_merge(['class' => 'form-control','step'=>"0.01"], $attributes)) }}
		<span class="input-group-addon">
            <span {{--class="glyphicon glyphicon-calendar"--}}>.xx</span>
        </span>
        </div>
	@endslot
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
@endcomponent		
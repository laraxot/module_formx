@php
$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
        {{ Form::number($name,$value, $field->attributes) }}
        <a href="#" class="btn btn-secondary"><i class="fa fa-up"></i></a>
        <a href="#" class="btn btn-secondary"><i class="fa fa-down"></i></a>
    @endslot
@endcomponent
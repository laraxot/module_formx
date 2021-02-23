<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
	$field->attributes=array_merge($field->attributes,['step'=>'0.01']);
	
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<div class="input-group">
		{{ Form::number($name, $value, $field->attributes) }}
		<span class="input-group-addon">
            <span {{--class="glyphicon glyphicon-calendar"--}}>.xx</span>
        </span>
        </div>
	@endslot
=======
@php
	$field=transFields(get_defined_vars());
	$field->attributes=array_merge($field->attributes,['step'=>'0.01']);
	
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<div class="input-group">
		{{ Form::number($name, $value, $field->attributes) }}
		<span class="input-group-addon">
            <span {{--class="glyphicon glyphicon-calendar"--}}>.xx</span>
        </span>
        </div>
	@endslot
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endcomponent		
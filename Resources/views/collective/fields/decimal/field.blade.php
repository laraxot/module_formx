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
@endcomponent		
=======
@php
$field = transFields(get_defined_vars());
$field->attributes = array_merge($field->attributes, ['step' => '0.001']);

@endphp
@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label']) }}
    @endslot
    @slot('input')
        <div class="input-group">
            {{ Form::number($name, $value, $field->attributes) }}
            <span class="input-group-addon">
                <span {{-- class="glyphicon glyphicon-calendar" --}}>.xx</span>
            </span>
        </div>
    @endslot
@endcomponent
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

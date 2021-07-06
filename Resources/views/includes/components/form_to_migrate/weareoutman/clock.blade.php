<<<<<<< HEAD
@php
	Theme::add($comp_ns.'/bc/clockpicker/dist/jquery-clockpicker.min.css');
	Theme::add($comp_ns.'/bc/clockpicker/dist/jquery-clockpicker.min.js');
	Theme::add($comp_ns.'/js/clockpicker.js');
	$label=isset($attributes['label'])?$attributes['label']:trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$field=transFields(get_defined_vars());
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
<div class="input-group clockpicker">
    {{ Form::text($name, $value, array_merge(['class' => 'form-control','placeholder'=>$placeholder,'autocomplete'=>'off'], $attributes)) }}
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
@if ( $errors->has($name) )
	<span class="help-block">
		<strong>{{ $errors->first($name) }}</strong>
	</span>
@endif
	@endslot
@endcomponent
=======
@php
	Theme::add($comp_ns.'/bc/clockpicker/dist/jquery-clockpicker.min.css');
	Theme::add($comp_ns.'/bc/clockpicker/dist/jquery-clockpicker.min.js');
	Theme::add($comp_ns.'/js/clockpicker.js');
	$label=isset($attributes['label'])?$attributes['label']:trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$field=transFields(get_defined_vars());
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
<div class="input-group clockpicker">
    {{ Form::text($name, $value, array_merge(['class' => 'form-control','placeholder'=>$placeholder,'autocomplete'=>'off'], $attributes)) }}
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
@if ( $errors->has($name) )
	<span class="help-block">
		<strong>{{ $errors->first($name) }}</strong>
	</span>
@endif
	@endslot
@endcomponent
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

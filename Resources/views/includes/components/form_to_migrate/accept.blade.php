<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		<b>{{ Form::label($name, $field->label , ['class' => 'control-label']) }}</b>
	@endslot
	@slot('input')
		<br />
		<textarea readonly="readonly" class="form-control" rows="6">
			{{ $attributes['text'] }}
		</textarea>
		<div class="row">
		<div class="col-md-6 pull-right">
			Accetto {{$field->label}}
		</div>
		<div class="col-md-6">
		{{ Form::checkbox($name, 1, $value,$field->attributes) }}
		</div>
		</div>
	@endslot
=======
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		<b>{{ Form::label($name, $field->label , ['class' => 'control-label']) }}</b>
	@endslot
	@slot('input')
		<br />
		<textarea readonly="readonly" class="form-control" rows="6">
			{{ $attributes['text'] }}
		</textarea>
		<div class="row">
		<div class="col-md-6 pull-right">
			Accetto {{$field->label}}
		</div>
		<div class="col-md-6">
		{{ Form::checkbox($name, 1, $value,$field->attributes) }}
		</div>
		</div>
	@endslot
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endcomponent
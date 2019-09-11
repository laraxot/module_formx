@php
	/*
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
	*/
	$field=transFields(get_defined_vars());
	if(Str::endsWith($name,']')){
		$name_conf=substr($name,0,-1).'_confirmation]';
	}else{
		$name_conf=$name.'_confirmation';
	}
@endphp
<div class="row">
<div class="col-sm-6">
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::password($name, $field->attributes) }}
	@endslot
@endcomponent
</div>
<div class="col-sm-6">
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name_conf, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::password($name_conf.'__confirmation', $field->attributes) }}
	@endslot
@endcomponent
</div>
</div>
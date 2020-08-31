@php
	//da finire, componente destinato a far visualizzare i prezzi correttamente formattati(?)
	//dddx(get_defined_vars());
	$field=transFields(get_defined_vars());
	//dddx(get_defined_vars());
	/*
	if($value != null){
		$value = @money($value * 100, $this->currency);
	}
	*/
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, $field->attributes) }}
	@endslot
@endcomponent

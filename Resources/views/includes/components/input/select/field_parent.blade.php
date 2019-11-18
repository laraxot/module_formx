@php
	$options=[];
	extract($attributes);
	ddd(get_defined_vars());
	$field=transFields(get_defined_vars());
	$row=Form::getModel();
	$row_panel=Panel::get($row);
	//ddd($row_panel);
	//ddd($row_panel->rows([]) );
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent

@php
	$row=Form::getModel();
    //dddx(get_defined_vars());
    return '';
	//dd(get_defined_vars()['__data']);
	//$opts=$
	$field=$options['field'];
	$rows=$row->{$field->relationship}();
    //dddx($rows);

    $related=$rows->getRelated();
	$related_panel=Panel::get($related);
	$related_panel->setRows($related->all());
	//ddd($related_panel->optionsSelect());
	//ddd($related->all());
	/*
	ddd($related);
	$opts=$rows->all();
	*/
	$opts=$related_panel->optionsSelect();
	$field=transFields(get_defined_vars());
	//$field=transFields(get_defined_vars());
	//ddd($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent

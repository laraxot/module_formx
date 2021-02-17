@php
	$related_class=($options['field']->related_class);
	$panel_related=Panel::get(new $related_class);
	$rows=with(new $related_class)->get();
	$panel_related->setRows($rows);
	//ddd(get_defined_vars());
	$field=transFields(get_defined_vars());
	//Category::pluck('name', 'id')
	//$opts=['1'=>'test','2'=>'prova'];

	//$opts=$related_class::pluck('nome','id');
	$opts=$panel_related->optionsSelect();

@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')

		{{ Form::select($name, $opts,$value, $field->attributes) }}
	@endslot
@endcomponent
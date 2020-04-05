@php
    $row=Form::getModel();
    //$rows=$row->$name; //risultati per l'edit ..
    $related=$row->$name()->getRelated(); // model cuisineCat
    $related_panel=Panel::get($related);
    $related_panel->setRows($related->all());
    $opts=$related_panel->optionsSelect();

    $field=transFields(get_defined_vars());//in xot helper

    $name1=$name.'[post_id]'; //da rendere dinamico
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name1, $field->label , ['class' => 'control-label form-label']) }} {{-- $field->label_attributes --}}
	@endslot
	@slot('input')
		{{ Form::select($name1,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent



@php
    $model=Form::getModel();
    $field=transFields(get_defined_vars());
    $rows=$model->$name();
    //dddx(get_class_methods($rows));
    $name1=$rows->getForeignKeyName();
    //$name1=$rows->getLocalKeyName();
    //$field->name=$name1;
    $field->attributes['name']=$name1;
    $related=$rows->getRelated();
    $related_panel=Panel::get($related);
    $opts=$related_panel->optionsSelect();
@endphp


@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name1, $field->label , ['class' => 'control-label form-label']) }} {{-- $field->label_attributes  --}}
	@endslot
	@slot('input')
		{{ Form::select($name1,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent

@php
    $row=Form::getModel();
    //$rows=$row->$name; //risultati per l'edit ..
    $related=$row->$name()->getRelated(); // model cuisineCat
    $related_panel=Panel::get($related);
    $related_panel->setRows($related->all());
    $opts=$related_panel->optionsSelect();

    $field=transFields(get_defined_vars());//in xot helper

    $name1=$name.'[]'; //da rendere dinamico

    $field->attributes['data-style']='btn-selectpicker';
    $field->attributes['data-live-search']='true';
    $field->attributes['class']="selectpicker form-control";
    $field->attributes['data-max-options']="3";

    $field->attributes['name']=$name1;
    $field->attributes[]='multiple';

@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name1, $field->label , ['class' => 'control-label form-label']) }} {{-- $field->label_attributes --}}
	@endslot
	@slot('input')
		{{ Form::select($name1,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent

@push('styles')
<style>
    .bootstrap-select.btn-group .dropdown-menu {
    z-index: 2000;
}
</style>
@endpush

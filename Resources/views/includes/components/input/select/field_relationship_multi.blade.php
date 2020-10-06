@php
    /*
    funzionante, MA....
    SI VISUALIZZA MALE per colpa dei css (credo classe dropdown-toggle di button)

    funziona in base al nome della relazione inserito nel campo 'name' del fields del pannello
    visualizza elenc di tutti gli elementi già esistenti della relazione (esempio tag, category), 
    permette la selezione multipla

     utilizzabile anche nei custom form?????
    */

    $row=Form::getModel();
    //$rows=$row->$name; //risultati per l'edit ..
    $related=$row->$name()->getRelated(); // model cuisineCat
    $related_panel=Panel::get($related);
    $rows=$related->get()->load('post');
    $related_panel->setRows($rows);
    $opts=$related_panel->optionsSelect();
    //dddx($rows->pluck('post.title','id'));
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

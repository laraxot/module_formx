<<<<<<< HEAD
@php
    //https://select2.org/getting-started/basic-usage

    Theme::add($comp_ns.'/select2_4.1.0_beta.1/select2.js');
    Theme::add($comp_ns.'/select2_4.1.0_beta.1/select2.css');

    $row=Form::getModel();
    //$rows=$row->$name; //risultati per l'edit ..
    $related=$row->$name()->getRelated(); 
    $related_panel=Panel::get($related);
    $rows=$related->get()->load('post');
    $related_panel->setRows($rows);
    $opts=$related_panel->optionsSelect();
    //dddx($opts);
    $field=transFields(get_defined_vars());
    $field->attributes['multiple']='multiple';
    //$field->attributes['class'].=' select2';

    $field->attributes['class'].=' js-example-basic-multiple';

    $name1=$name.'[]'; //da rendere dinamico
    $field->attributes['name']=$name1;


    //dddx($field);
@endphp


@component($blade_component,get_defined_vars())
	@slot('label')
	  {{ Form::label($name1, $field->label , ['class' => 'control-label form-label']) }} {{-- $field->label_attributes --}}
	@endslot
	@slot('input')
		{{ Form::select($name1,$opts,$value,$field->attributes) }}
	@endslot
@endcomponent

@push('scripts')
<script>
$(document).ready(function() {
  $('.js-example-basic-multiple').select2();
});
</script>
=======
@php
    //https://select2.org/getting-started/basic-usage

    Theme::add($comp_ns.'/select2_4.1.0_beta.1/select2.js');
    Theme::add($comp_ns.'/select2_4.1.0_beta.1/select2.css');

    $row=Form::getModel();
    //$rows=$row->$name; //risultati per l'edit ..
    $related=$row->$name()->getRelated(); 
    $related_panel=Panel::get($related);
    $rows=$related->get()->load('post');
    $related_panel->setRows($rows);
    $opts=$related_panel->optionsSelect();
    //dddx($opts);
    $field=transFields(get_defined_vars());
    $field->attributes['multiple']='multiple';
    //$field->attributes['class'].=' select2';

    $field->attributes['class'].=' js-example-basic-multiple';

    $name1=$name.'[]'; //da rendere dinamico
    $field->attributes['name']=$name1;


    //dddx($field);
@endphp


@component($blade_component,get_defined_vars())
	@slot('label')
	  {{ Form::label($name1, $field->label , ['class' => 'control-label form-label']) }} {{-- $field->label_attributes --}}
	@endslot
	@slot('input')
		{{ Form::select($name1,$opts,$value,$field->attributes) }}
	@endslot
@endcomponent

@push('scripts')
<script>
$(document).ready(function() {
  $('.js-example-basic-multiple').select2();
});
</script>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endpush
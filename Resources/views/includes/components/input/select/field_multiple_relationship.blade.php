@php

    //installare https://select2.org/

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
    $field->attributes['class'].=' select2';

    $name1=$name.'[]'; //da rendere dinamico
    $field->attributes['name']=$name1;
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
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.select2').select2({
      theme: "bootstrap",
        tags: "true",
        allowClear: true
   });
});
</script>
@endpush
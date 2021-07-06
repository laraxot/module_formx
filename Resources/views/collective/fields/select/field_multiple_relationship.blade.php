<<<<<<< HEAD
@php
    /*
    funzionante, da mettere in documentazione!!!

    requisiti:
    -installare https://select2.org/
    -installare anche select2-theme-bootstrap4

    funziona in base al nome della relazione inserito nel campo 'name' del fields del pannello
    collaudato con creazione/aggioramento articolo(modulo blog)
    visualizza un input select con ricerca automatica del testo inserito
    all'inserimento del testo elenca tutti gli elementi già esistenti della relazione (esempio tag, category), 
    che hanno le stesso iniziali del testo scritto, permettendo di inserirne altri.
    permette la selezione multipla

    utilizzabile anche nei custom form?????
    */

    //Theme::add('formx::plugin\select2\select2.min.css');
    //Theme::add('formx::plugin\select2\select2.min.js');

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
=======
@php
    /*
    funzionante, da mettere in documentazione!!!

    requisiti:
    -installare https://select2.org/
    -installare anche select2-theme-bootstrap4

    funziona in base al nome della relazione inserito nel campo 'name' del fields del pannello
    collaudato con creazione/aggioramento articolo(modulo blog)
    visualizza un input select con ricerca automatica del testo inserito
    all'inserimento del testo elenca tutti gli elementi già esistenti della relazione (esempio tag, category), 
    che hanno le stesso iniziali del testo scritto, permettendo di inserirne altri.
    permette la selezione multipla

    utilizzabile anche nei custom form?????
    */

    //Theme::add('formx::plugin\select2\select2.min.css');
    //Theme::add('formx::plugin\select2\select2.min.js');

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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endpush
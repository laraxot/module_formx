<<<<<<< HEAD
@php
    $field=transFields(get_defined_vars());
    $field->attributes['class']='toggle_hide';
    Theme::add($comp_ns.'/js/andHide.js');
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
    @slot('input')
        {{ Form::bsHidden($name,0) }}  {{-- se non selezionato restituisce 0 al posto di null --}}
        {{ Form::checkbox($name, 1,$value, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
    $field=transFields(get_defined_vars());
    $field->attributes['class']='toggle_hide';
    Theme::add($comp_ns.'/js/andHide.js');
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
    @slot('input')
        {{ Form::bsHidden($name,0) }}  {{-- se non selezionato restituisce 0 al posto di null --}}
        {{ Form::checkbox($name, 1,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

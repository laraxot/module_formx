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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

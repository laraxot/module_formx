<<<<<<< HEAD
@php
$field = transFields(get_defined_vars());
//provo a cambiare un po il layout per visualizzare meglio il checkbox
//utilizzo un nuovo blade_component fatto a doc per i campi boolean
//(ancora in test, nel caso cancellare il nuovo componente)
//$blade_component = 'theme::layouts.components.blade.input_boolean';
//dddx($field->attributes);
@endphp
@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label form-label']) }}
    @endslot
    @slot('input')
        {{-- Form::bsHidden($name,0) --}} {{-- se non selezionato restituisce 0 al posto di null --}}
        <input type="hidden" name="{{ $name }}" value="0">
        {{ Form::checkbox($name, 1, $value, $field->attributes) }}
    @endslot
@endcomponent
=======
@php
$field = transFields(get_defined_vars());
//provo a cambiare un po il layout per visualizzare meglio il checkbox
//utilizzo un nuovo blade_component fatto a doc per i campi boolean
//(ancora in test, nel caso cancellare il nuovo componente)
//$blade_component = 'theme::layouts.components.blade.input_boolean';
//dddx($field->attributes);
@endphp
@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label form-label']) }}
    @endslot
    @slot('input')
        {{-- Form::bsHidden($name,0) --}} {{-- se non selezionato restituisce 0 al posto di null --}}
        <input type="hidden" name="{{ $name }}" value="0">
        {{ Form::checkbox($name, 1, $value, $field->attributes) }}
    @endslot
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

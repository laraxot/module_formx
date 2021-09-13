<<<<<<< HEAD
<<<<<<< HEAD
@php
/*
(object) [
 'type' => 'SelectOptions',
 'name' => 'mimetype',
 'comment' => null,
 'attributes' => ['placeholder' => 'Inserisci il tipo file'],
 'options' => ['pdf' => 'pdf', 'doc' => 'doc', 'xls' => 'xls', 'xxx' => 'xxx'],
 'col_bs_size' => 3,
],
*/

//dddx(get_defined_vars());

$field = transFields(get_defined_vars());
//dddx($field);
$opts = $options['field']->options;
//$field=transFields(get_defined_vars());
@endphp

@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label']) }}
    @endslot
    @slot('input')
        {{ Form::select($name, $opts, $value, $field->attributes) }}
    @endslot
@endcomponent
=======
@php
/*
(object) [
 'type' => 'SelectOptions',
 'name' => 'mimetype',
 'comment' => null,
 'attributes' => ['placeholder' => 'Inserisci il tipo file'],
 'options' => ['pdf' => 'pdf', 'doc' => 'doc', 'xls' => 'xls', 'xxx' => 'xxx'],
 'col_bs_size' => 3,
],
*/

//dddx(get_defined_vars());

$field = transFields(get_defined_vars());
//dddx($field);
$opts = $options['field']->options;
//$field=transFields(get_defined_vars());
@endphp

@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label']) }}
    @endslot
    @slot('input')
        {{ Form::select($name, $opts, $value, $field->attributes) }}
    @endslot
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
/*
(object) [
 'type' => 'SelectOptions',
 'name' => 'mimetype',
 'comment' => null,
 'attributes' => ['placeholder' => 'Inserisci il tipo file'],
 'options' => ['pdf' => 'pdf', 'doc' => 'doc', 'xls' => 'xls', 'xxx' => 'xxx'],
 'col_bs_size' => 3,
],
*/

//dddx(get_defined_vars());

$field = transFields(get_defined_vars());
//dddx($field);
$opts = $options['field']->options;
//$field=transFields(get_defined_vars());
@endphp

@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label']) }}
    @endslot
    @slot('input')
        {{ Form::select($name, $opts, $value, $field->attributes) }}
    @endslot
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

<<<<<<< HEAD
<<<<<<< HEAD
@php
$related_class = $options['field']->related_class;
//dddx(get_defined_vars());
$field = transFields(get_defined_vars());
//Category::pluck('name', 'id')
//$opts=['1'=>'test','2'=>'prova'];
$opts = $related_class::pluck('nome', 'id');
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
$related_class = $options['field']->related_class;
//dddx(get_defined_vars());
$field = transFields(get_defined_vars());
//Category::pluck('name', 'id')
//$opts=['1'=>'test','2'=>'prova'];
$opts = $related_class::pluck('nome', 'id');
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
$related_class = $options['field']->related_class;
//dddx(get_defined_vars());
$field = transFields(get_defined_vars());
//Category::pluck('name', 'id')
//$opts=['1'=>'test','2'=>'prova'];
$opts = $related_class::pluck('nome', 'id');
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

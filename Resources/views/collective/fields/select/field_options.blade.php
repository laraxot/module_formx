<<<<<<< HEAD
@php
	//ddd(get_defined_vars());


	$field=transFields(get_defined_vars());
	$opts=$options['field']->options; 
	//$field=transFields(get_defined_vars());
	//ddd($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
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

//ddd(get_defined_vars());

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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

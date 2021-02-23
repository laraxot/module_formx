<<<<<<< HEAD
@php
    /*
    uguale a field.blade.php tranne per il campo hidden, perchè nel browser dava errore:
    generava il doppio id


    NB: DA FINIRE!!! NON RIESCO A DARE IL VALORE CHECKED/UNCHECKED DI DEFAULT
    */
    $field=transFields(get_defined_vars());
    //dddx($field);
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
    @slot('input')
        {{ Form::checkbox($name, 1,$value, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
    /*
    uguale a field.blade.php tranne per il campo hidden, perchè nel browser dava errore:
    generava il doppio id


    NB: DA FINIRE!!! NON RIESCO A DARE IL VALORE CHECKED/UNCHECKED DI DEFAULT
    */
    $field=transFields(get_defined_vars());
    //dddx($field);
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
    @slot('input')
        {{ Form::checkbox($name, 1,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

@php
<<<<<<< HEAD
//dddx(get_defined_vars());
$field=transFields(get_defined_vars());
=======

$field = transFields(get_defined_vars());
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
//dddx($field);
@endphp
@component($blade_component, get_defined_vars())

    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label']) }}
    @endslot
    @slot('input')
        @php

<<<<<<< HEAD
        try{
        echo Form::text($name,$value,$field->attributes);
        }catch(\Exception $e){
        /*
        dddx(['field_name'=>$name,
        'value'=>$value,
        'err'=>$e->getMessage()
        ]);
        */
        echo $e->getMessage();
=======
        try {
            echo Form::text($name, $value, $field->attributes);
        } catch (\Exception $e) {
            /*
                        dddx(['field_name'=>$name,
                        'value'=>$value,
                        'err'=>$e->getMessage()
                        ]);
                        */
            echo $e->getMessage();
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
        }
        @endphp
    @endslot

@endcomponent

@php

$field = transFields(get_defined_vars());
//dddx($field);
//dddx($blade_component);
@endphp
@component($blade_component, get_defined_vars())

    @slot('label')
        @if ($field->label !== 'false')
            {{ Form::label($name, $field->label, ['class' => 'control-label']) }}
        @endif
    @endslot
    @slot('input')
        @php

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
        }
        @endphp
    @endslot

@endcomponent

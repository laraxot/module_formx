@php
$field=transFields(get_defined_vars());
//dddx($field);
//$field->attributes['wire:model']='row.'.$name;
//$field->attributes['id']=null;
//unset($field->attributes['id']);
@endphp
@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label form-label']) }}
    @endslot
    @slot('input')
        <input placeholder="type" name="type" wire:model="row.type" type="text" class="form-control">
        {{--
        {{ Form::text($name, $value, $field->attributes) }}
        --}}
    @endslot
@endcomponent

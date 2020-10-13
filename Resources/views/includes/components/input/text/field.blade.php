@php
//dddx(get_defined_vars());
$field=transFields(get_defined_vars());
//dddx($field);
//$field->attributes['wire:model']=$name;
if(!view()->exists($blade_component)){
    dddx([
        'err'=>'Not Exists',
        'blade'=>$blade_component,
    ]);
}
@endphp
@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name, $field->label, ['class' => 'control-label']) }}
    @endslot
    @slot('input')
        {{ Form::text($name, $value, $field->attributes) }}
    @endslot
@endcomponent

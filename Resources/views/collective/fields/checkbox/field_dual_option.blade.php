<<<<<<< HEAD
@php
    /* esempio
    {{ Form::bsCheckboxDualOption('restaurantMorph[status]',null,['label_type'=>'status','options'=>[0=>'egfno','1'=>'jidfswdjioswji',2=>'gvnnio']]) }}
    */

	$field=transFields(get_defined_vars());
	//$field->attributes['class'].=' custom-control-input';
    //dddx($attributes['options']);
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$attributes['options'],$value,$field->attributes) }}
	@endslot
=======
@php
    /* esempio
    {{ Form::bsCheckboxDualOption('restaurantMorph[status]',null,['label_type'=>'status','options'=>[0=>'egfno','1'=>'jidfswdjioswji',2=>'gvnnio']]) }}
    */

	$field=transFields(get_defined_vars());
	//$field->attributes['class'].=' custom-control-input';
    //dddx($attributes['options']);
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$attributes['options'],$value,$field->attributes) }}
	@endslot
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endcomponent
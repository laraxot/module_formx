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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endcomponent
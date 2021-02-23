<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
	Theme::add($comp_ns.'/js/tags.js');
	//$field->attributes=array_merge($field->attributes,['step'=>'0.01']);
	$field->attributes['class'].=' text_tags';
	$field->attributes['data-seperator']=",";
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
	    <br/><br/>
		{{ Form::text($name, $value, $field->attributes) }} 
	@endslot
@endcomponent

{{--
<input type="text" class="input" name="question_tags" id="question_tags" data-seperator=",">
<span class="form-description">Please choose  suitable Keywords Ex : <span class="color">question , poll</span> .</span>
=======
@php
	$field=transFields(get_defined_vars());
	Theme::add($comp_ns.'/js/tags.js');
	//$field->attributes=array_merge($field->attributes,['step'=>'0.01']);
	$field->attributes['class'].=' text_tags';
	$field->attributes['data-seperator']=",";
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
	    <br/><br/>
		{{ Form::text($name, $value, $field->attributes) }} 
	@endslot
@endcomponent

{{--
<input type="text" class="input" name="question_tags" id="question_tags" data-seperator=",">
<span class="form-description">Please choose  suitable Keywords Ex : <span class="color">question , poll</span> .</span>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
--}}
<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
	$field->attributes['class'].=' custom-control-input';

@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<div class="custom-control custom-switch">
  			{{--  
  			<input placeholder="" checked="checked" name="is_editable" type="checkbox" id="is_editable" class="custom-control-input">
  			--}}
  			<label class="custom-control-label mb-3" for="{{ $name }}">Toggle this switch element</label>
  			<input type="checkbox" class="custom-control-input mb-3" id="{{ $name }}" name="{{ $name }}">
			

		</div>
	@endslot
=======
@php
	$field=transFields(get_defined_vars());
	$field->attributes['class'].=' custom-control-input';

@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<div class="custom-control custom-switch">
  			{{--  
  			<input placeholder="" checked="checked" name="is_editable" type="checkbox" id="is_editable" class="custom-control-input">
  			--}}
  			<label class="custom-control-label mb-3" for="{{ $name }}">Toggle this switch element</label>
  			<input type="checkbox" class="custom-control-input mb-3" id="{{ $name }}" name="{{ $name }}">
			

		</div>
	@endslot
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endcomponent
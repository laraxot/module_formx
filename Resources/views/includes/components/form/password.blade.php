@php
	/*
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
	*/
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{--	
		{{ Form::password($name,  array_merge(['class' => 'form-control','placeholder'=>trans($view.'.field.'.$name.'_placeholder')], $attributes)) }}
		--}}
		{{ Form::password($name, $field->attributes) }}
	{{-- messo nel blade component 
	@if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small> 
</div>
--}}
	@endslot
@endcomponent

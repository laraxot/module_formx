@php
	/*
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
	*/
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
@endphp
@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
	{{ Form::textarea($name, $value, $field->attributes) }}
	{{--
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

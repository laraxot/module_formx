<<<<<<< HEAD
@php
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	{{ Form::checkbox($name, $value, array_merge(['class' => 'form-control','placeholder'=>trans($view.'.field.'.$name.'_placeholder')], $attributes)) }}
	@if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small> 
=======
@php
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	{{ Form::checkbox($name, $value, array_merge(['class' => 'form-control','placeholder'=>trans($view.'.field.'.$name.'_placeholder')], $attributes)) }}
	@if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small> 
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
</div>
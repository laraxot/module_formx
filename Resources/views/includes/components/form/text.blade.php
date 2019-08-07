@php
	/*
	if(!isset($view)){
		$view=$comp_view; 
	}
	$view_noact=implode('.',array_slice(explode('.',$view),0,-1));
	$label=isset($attributes['label'])?$attributes['label']:trans($view_noact.'.field.'.$name);
	$placeholder=trans($view_noact.'.field.'.$name.'_placeholder');
	*/
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
@endphp
{{-- [{{  \Route::currentRouteName() }}] container0.create --}}
{{-- {{ $view_name }} extend::includes.components.form.text --}}
{{--{{ $view }}--}}
@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, array_merge(['class' => 'form-control','placeholder'=>$field->placeholder], $attributes)) }}
		{{-- MESSO NEL BLADE COMPONENT
		@if ( $errors->has(bracketsToDotted($name)) )
			<span class="help-block">
				<strong>{{ $errors->first(bracketsToDotted($name)) }}</strong>
			</span>
		@endif
		--}}
	@endslot
@endcomponent
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
	$attr1=[
		'class'=>'form-control col-md-2',
		'readonly'=>'readonly',
	];
	$attr2=[
		'class'=>'form-control col-md-10 typeahead',
		//'data-url'=>"/admin/food/it/cuisine_cat?query=%QUERY%",
		'data-url'=>$attributes['data-url'],
		'data-id'=>$name,
		'data-name'=>$name,
	];
@endphp
{{-- [{{  \Route::currentRouteName() }}] container0.create --}}
{{-- {{ $view_name }} extend::includes.components.form.text --}}
{{--{{ $view }}--}}
@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<div class="input-group mb-3">
		{{ Form::text($name, $value, $attr1) }}
		{{ Form::text('', $value, $attr2) }}
		</div>
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	@endslot
@endcomponent
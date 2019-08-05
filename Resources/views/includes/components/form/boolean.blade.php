@php
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
	//ddd($field);
	//checkbox($name, $value = 1, $checked = null, $options = [])
@endphp
{{-- [{{  \Route::currentRouteName() }}] container0.create --}}
{{-- {{ $view_name }} extend::includes.components.form.text --}}
{{--{{ $view }}--}}
@component($blade_component,get_defined_vars())
	@slot('label')
		<b>{{ Form::label($name, $field->label , ['class' => 'control-label']) }}</b>
	@endslot
	@slot('input')
		<br />
		<textarea readonly="readonly" class="form-control" rows="6">
			{{ $attributes['text'] }}
		</textarea>

		{{--
		<br/><a href="#" data-toggle="modal" data-target="#modal_">@lang('pub_theme::txt.read')</a>
		{{ Form::text($name, $value, $field->attributes) }}
		--}}
		<div class="row">
		<div class="col-md-6 pull-right">
			Accetto {{$field->label}}
		</div>
		<div class="col-md-6">
		{{ Form::checkbox($name, 1, $value,$field->attributes) }}
		</div>
		</div>

		{{--
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
		--}}
	@endslot
@endcomponent
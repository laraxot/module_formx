<<<<<<< HEAD
@php
	$label=isset($attributes['label'])?$attributes['label']:trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$dayOfWeek= \Carbon\Carbon::now()->dayOfWeek;

	$daynames=[
		trans('formx::txt.day_names.sun'),
		trans('formx::txt.day_names.mon'),
		trans('formx::txt.day_names.tue'),
		trans('formx::txt.day_names.wed'),
		trans('formx::txt.day_names.thu'),
		trans('formx::txt.day_names.fri'),
		trans('formx::txt.day_names.sat'),
	];
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	{{ Form::select($name, $daynames,null,['class'=>'form-control','placeholder'=>$placeholder]) }}
	@if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small> 
=======
@php
	$label=isset($attributes['label'])?$attributes['label']:trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$dayOfWeek= \Carbon\Carbon::now()->dayOfWeek;

	$daynames=[
		trans('formx::txt.day_names.sun'),
		trans('formx::txt.day_names.mon'),
		trans('formx::txt.day_names.tue'),
		trans('formx::txt.day_names.wed'),
		trans('formx::txt.day_names.thu'),
		trans('formx::txt.day_names.fri'),
		trans('formx::txt.day_names.sat'),
	];
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	{{ Form::select($name, $daynames,null,['class'=>'form-control','placeholder'=>$placeholder]) }}
	@if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small> 
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
</div>
<<<<<<< HEAD
<<<<<<< HEAD
@php
	Theme::addSelect2();
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$ajaxurl=url($attributes['ajaxurl'])
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	<select class="form-control select2ajax" name="{{ $name }}" data-tags="true" 
        					data-placeholder="{{ $placeholder }}" 
        					data-allow-clear="true" data-ajax--url="{{ $ajaxurl }}" data-ajax--cache="true" >
    </select>
    @if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small>
=======
@php
	Theme::addSelect2();
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$ajaxurl=url($attributes['ajaxurl'])
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	<select class="form-control select2ajax" name="{{ $name }}" data-tags="true" 
        					data-placeholder="{{ $placeholder }}" 
        					data-allow-clear="true" data-ajax--url="{{ $ajaxurl }}" data-ajax--cache="true" >
    </select>
    @if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
	Theme::addSelect2();
	if(isset($attributes['label']))
		$label=$attributes['label'];
	else
		$label=trans($view.'.field.'.$name);
	$placeholder=trans($view.'.field.'.$name.'_placeholder');
	$ajaxurl=url($attributes['ajaxurl'])
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name, $label , ['class' => 'control-label']) }}
	<select class="form-control select2ajax" name="{{ $name }}" data-tags="true" 
        					data-placeholder="{{ $placeholder }}" 
        					data-allow-clear="true" data-ajax--url="{{ $ajaxurl }}" data-ajax--cache="true" >
    </select>
    @if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
	<small class="form-text text-muted">{{ trans($view.'.field.'.$name.'_help') }} </small>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
</div>
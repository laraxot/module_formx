<<<<<<< HEAD
<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">	
		{{ Form::text($name, $value, array_merge(['class' => 'form-control geocomplete'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>

{{  Theme::addScript('/theme/bc/jquery/dist/jquery.min.js') }}
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">	
		{{ Form::text($name, $value, array_merge(['class' => 'form-control geocomplete'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>

{{  Theme::addScript('/theme/bc/jquery/dist/jquery.min.js') }}
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">	
		{{ Form::text($name, $value, array_merge(['class' => 'form-control geocomplete'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>

{{  Theme::addScript('/theme/bc/jquery/dist/jquery.min.js') }}
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
{{  Theme::addScript('/theme/js/bsGeo.js') }}
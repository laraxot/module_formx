<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
	{{ dd($attributes) }}	
		{{ Form::text($name, $value, array_merge(['class' => 'form-control geocomplete'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>

=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
	{{ dd($attributes) }}	
		{{ Form::text($name, $value, array_merge(['class' => 'form-control geocomplete'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>

>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
{{  Theme::addScript($comp_dir.'/js/bsGeo.js') }}
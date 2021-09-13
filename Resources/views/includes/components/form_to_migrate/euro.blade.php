<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans($view.'.field.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
		<div class="input-group">
		{{ Form::number($name, $value, array_merge(['class' => 'form-control','step'=>"0.01"], $attributes)) }}
		<span class="input-group-addon">
            <span class="fa fa-eur"></span>
        </span>
        </div>
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans($view.'.field.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
		<div class="input-group">
		{{ Form::number($name, $value, array_merge(['class' => 'form-control','step'=>"0.01"], $attributes)) }}
		<span class="input-group-addon">
            <span class="fa fa-eur"></span>
        </span>
        </div>
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
</div>
<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	@if(!isset($attributes['nolabel']))
	{{ Form::label($name,  trans($view.'.field.'.$name), ['class' => 'col-md-4 control-label']) }}
	@endif
	<div class="col-md-6">	
		{{ Form::checkbox($name, $value,$checked,array_merge(['class' => 'form-control bootstrap-switch'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>

{{ Theme::add('theme/bc/bootstrap-switch/bootstrap-switch.js') }}
{{ Theme::add('backend::js/bsSwitch.js') }}

=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	@if(!isset($attributes['nolabel']))
	{{ Form::label($name,  trans($view.'.field.'.$name), ['class' => 'col-md-4 control-label']) }}
	@endif
	<div class="col-md-6">	
		{{ Form::checkbox($name, $value,$checked,array_merge(['class' => 'form-control bootstrap-switch'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>

{{ Theme::add('theme/bc/bootstrap-switch/bootstrap-switch.js') }}
{{ Theme::add('backend::js/bsSwitch.js') }}

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

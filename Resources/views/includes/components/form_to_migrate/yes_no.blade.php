<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans($view.'.field.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">	
		{{ Form::checkbox($name, 1,$value, array_merge(['class' => 'form-control switchyesno','data-on-text'=>'Yes','data-off-text'=>'No'], $attributes)) }}
		{{-- Form::text($name, $value, array_merge(['class' => 'form-control '], $attributes)) --}}
		{{--
		SI{{ Form::radio($name,1,$value) }}
		NO{{ Form::radio($name,0,$value) }}
		--}}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>
{{--  
{{ Theme::add('theme/bc/bootstrap-switch/dist/js/bootstrap-switch.min.js',50) }}
{{ Theme::add('theme/bc/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',51) }}
{{ Theme::add('formx::js/bsYesNo.js',52) }}
--}}

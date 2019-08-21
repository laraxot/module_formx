@php
<<<<<<< HEAD
	$view_noact=implode('.',array_slice(explode('.',$view),0,-1));
	$label=isset($attributes['label'])?$attributes['label']:trans($view_noact.'.field.'.$name);
	$placeholder=trans($view_noact.'.field.'.$name.'_placeholder');
@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  $label, ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
		<div class="datepicker-input input-group date">
		{{ Form::number($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
		<span class="input-group-addon">
            <span {{--class="glyphicon glyphicon-calendar"--}}></span>
        </span>
        </div>
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>
=======
$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::number($name,$value, $field->attributes) }}
    @endslot
@endcomponent
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492

<<<<<<< HEAD
@php

$timestamp = strtotime('previous month');
$days = array();
for ($i = 0; $i < 12; $i++) {
	$m=strftime('%m', $timestamp)*1;
    $days[$m] = $m.') '.strftime('%B', $timestamp);
    $timestamp = strtotime('+1 month', $timestamp);
}
$options=$days;

@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans($view.'.field.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">	
		{{ Form::select($name,$options,$value,array_merge(['class' => 'form-control'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
=======
@php

$timestamp = strtotime('previous month');
$days = array();
for ($i = 0; $i < 12; $i++) {
	$m=strftime('%m', $timestamp)*1;
    $days[$m] = $m.') '.strftime('%B', $timestamp);
    $timestamp = strtotime('+1 month', $timestamp);
}
$options=$days;

@endphp
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans($view.'.field.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">	
		{{ Form::select($name,$options,$value,array_merge(['class' => 'form-control'], $attributes)) }}
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
</div>
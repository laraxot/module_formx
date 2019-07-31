@php
	$field=transFields(array_merge($attributes,['view'=>$view,'name'=>$name]));
	$fields['attributes']['data-input']='data-input';
    $val=Form::getValueAttribute($name);
    if($val==null) $val=Carbon\Carbon::now();
    $val1=$val->format('d/m/Y H:i');
@endphp
@component($blade_component,compact('name','value','attributes','comp_view','field'))
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{--
		{{ Form::text($name, $value, $field->attributes) }}
		--}}
		<div class="datetime_flatpickr input-group mb-3">
    		{{--
    		<input type="text" placeholder="Select Date.." data-input class="form-control" > <!-- input is mandatory -->
    		--}}
    		{{ Form::text($name, $val1, ['data-input','class'=>"form-control"] ) }}
    		<div class="input-group-append">
    			<a class="btn btn-outline-secondary" title="toggle" data-toggle>
        			<i class="far fa-calendar-alt"></i>
    			</a>
    		</div>
    		<div class="input-group-append">
    			<a class="btn btn-outline-secondary" title="clear" data-clear>
        			<i class="fas fa-times"></i>
    			</a>
    		</div>
		</div>
	@endslot
@endcomponent
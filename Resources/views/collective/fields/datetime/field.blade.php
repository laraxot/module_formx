@php
	$field=transFields(get_defined_vars());
	$fields['attributes']['data-input']='data-input';
    $val=Form::getValueAttribute($name);
    if($val==null) $val=Carbon\Carbon::now();
    if(!is_object($val)){
        $model=Form::getModel();
        $class=get_class($model);
        $msg=[
            'name'=>$name,
            'val'=>$val,
            'class'=>$class,
            'model'=>$model,
            'tips'=>'Add ['.$name.'] into protected $dates in '.$class,
        ];
        //ddd($msg);
        $val1=$val;
    }else{
        $val1=$val->format('d/m/Y H:i');
    }
@endphp
@component($blade_component,get_defined_vars())
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

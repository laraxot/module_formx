<<<<<<< HEAD
<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
		<div class="datepicker-input input-group date">
        @php
            $val=Form::getValueAttribute($name);

            if($val===null) {
            	$val=\Carbon\Carbon::now(); // +"date": "2017-10-18 11:22:50.429984"
  											// +"timezone_type": 3
  											// +"timezone": "UTC"
            }
            if($value!==null) $val=$value;
            
        @endphp
        
		{{ Form::dateTimeLocal($name,$val, array_merge(['class' => 'form-control'], $attributes)) }}
		<span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
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
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
		<div class="datepicker-input input-group date">
        @php
            $val=Form::getValueAttribute($name);

            if($val===null) {
            	$val=\Carbon\Carbon::now(); // +"date": "2017-10-18 11:22:50.429984"
  											// +"timezone_type": 3
  											// +"timezone": "UTC"
            }
            if($value!==null) $val=$value;
            
        @endphp
        
		{{ Form::dateTimeLocal($name,$val, array_merge(['class' => 'form-control'], $attributes)) }}
		<span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
        </div>
        
		@if ( $errors->has($name) )
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
		<div class="datepicker-input input-group date">
        @php
            $val=Form::getValueAttribute($name);

            if($val===null) {
            	$val=\Carbon\Carbon::now(); // +"date": "2017-10-18 11:22:50.429984"
  											// +"timezone_type": 3
  											// +"timezone": "UTC"
            }
            if($value!==null) $val=$value;
            
        @endphp
        
		{{ Form::dateTimeLocal($name,$val, array_merge(['class' => 'form-control'], $attributes)) }}
		<span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
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
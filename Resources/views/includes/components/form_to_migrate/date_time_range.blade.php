<<<<<<< HEAD
<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,  trans('table.'.$name), ['class' => 'col-md-4 control-label']) }}
	<div class="col-md-6">
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
		<?php
        $val = Form::getValueAttribute($name);
        $val1 = \Carbon\Carbon::parse($val)->formatLocalized('%d/%m/%Y %H:%M'); // da errore perche' son 2 date
        //echo '<br/>' . \Carbon\Carbon::createFromFormat('Y-m-d',$val)->formatLocalized('%d/%m/%Y');
        //echo '<br/>'.$value;
        //echo '<br/>'.\Carbon\Carbon::createFromFormat('Y-m-d H:i:s','2017-01-01 13:23:22');
        // il form :: non date time ma text
        ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<div class="datepicker-input input-group date">
		{{ Form::text($name, $val1, array_merge(['class' => 'form-control datepicker'], $attributes)) }}
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
</div>

{{	Theme::addStyle('/theme/bc/bootstrap-daterangepicker/daterangepicker.css') }}

{{  Theme::addScript('/theme/bc/jquery/dist/jquery.min.js') }}
{{--	Theme::addScript('/theme/bc/moment/min/moment.min.js') --}}
{{--	Theme::addScript('/theme/bc/bootstrap-daterangepicker/daterangepicker.js') --}}
{{  Theme::addScript('/theme/js/bsDateTimeRange.js') }}

{{-- 
https://gist.github.com/brunoti/53bd7b3501e3626a9baa
=======
		<div class="datepicker-input input-group date">
		{{ Form::text($name, $val1, array_merge(['class' => 'form-control datepicker'], $attributes)) }}
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
</div>

{{	Theme::addStyle('/theme/bc/bootstrap-daterangepicker/daterangepicker.css') }}

{{  Theme::addScript('/theme/bc/jquery/dist/jquery.min.js') }}
{{--	Theme::addScript('/theme/bc/moment/min/moment.min.js') --}}
{{--	Theme::addScript('/theme/bc/bootstrap-daterangepicker/daterangepicker.js') --}}
{{  Theme::addScript('/theme/js/bsDateTimeRange.js') }}

{{-- 
https://gist.github.com/brunoti/53bd7b3501e3626a9baa
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
		<div class="datepicker-input input-group date">
		{{ Form::text($name, $val1, array_merge(['class' => 'form-control datepicker'], $attributes)) }}
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
</div>

{{	Theme::addStyle('/theme/bc/bootstrap-daterangepicker/daterangepicker.css') }}

{{  Theme::addScript('/theme/bc/jquery/dist/jquery.min.js') }}
{{--	Theme::addScript('/theme/bc/moment/min/moment.min.js') --}}
{{--	Theme::addScript('/theme/bc/bootstrap-daterangepicker/daterangepicker.js') --}}
{{  Theme::addScript('/theme/js/bsDateTimeRange.js') }}

{{-- 
https://gist.github.com/brunoti/53bd7b3501e3626a9baa
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
 --}}
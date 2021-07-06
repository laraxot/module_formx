<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{--
		{{ Form::text($name, $value, $field->attributes) }}
		--}}
		<div class="row">
    		<div class="col-md-6">	
        		<div class="date_flatpickr input-group mb-3">
            		<input type="text" placeholder="Select Date.." data-input class="form-control" > <!-- input is mandatory -->
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
		    </div>
    		<div class="col-md-6">
        		<div class="time_flatpickr input-group mb-3">
            		<input type="text" placeholder="Select Date.." data-input class="form-control" > <!-- input is mandatory -->
            		<div class="input-group-append">
            			<a class="btn btn-outline-secondary" title="toggle" data-toggle>
                			<i class="far fa-clock"></i>
            			</a>
            		</div>
            		<div class="input-group-append">
            			<a class="btn btn-outline-secondary" title="clear" data-clear>
                			<i class="fas fa-times"></i>
            			</a>
            		</div>
        		</div>
    		</div>
		</div>
	@endslot
=======
@php
	$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{--
		{{ Form::text($name, $value, $field->attributes) }}
		--}}
		<div class="row">
    		<div class="col-md-6">	
        		<div class="date_flatpickr input-group mb-3">
            		<input type="text" placeholder="Select Date.." data-input class="form-control" > <!-- input is mandatory -->
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
		    </div>
    		<div class="col-md-6">
        		<div class="time_flatpickr input-group mb-3">
            		<input type="text" placeholder="Select Date.." data-input class="form-control" > <!-- input is mandatory -->
            		<div class="input-group-append">
            			<a class="btn btn-outline-secondary" title="toggle" data-toggle>
                			<i class="far fa-clock"></i>
            			</a>
            		</div>
            		<div class="input-group-append">
            			<a class="btn btn-outline-secondary" title="clear" data-clear>
                			<i class="fas fa-times"></i>
            			</a>
            		</div>
        		</div>
    		</div>
		</div>
	@endslot
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endcomponent
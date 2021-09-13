<<<<<<< HEAD
<<<<<<< HEAD
@php
    extract($attributes);
    
    $opts=\Modules\Blog\Models\Label::where('label_type',$label_type)
        ->get()
        ->pluck('title','label_id');


	$field=transFields(get_defined_vars());
	//$opts=$options['field']->options; 
	//$field=transFields(get_defined_vars());
	//dddx($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
    extract($attributes);
    
    $opts=\Modules\Blog\Models\Label::where('label_type',$label_type)
        ->get()
        ->pluck('title','label_id');


	$field=transFields(get_defined_vars());
	//$opts=$options['field']->options; 
	//$field=transFields(get_defined_vars());
	//dddx($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
    extract($attributes);
    
    $opts=\Modules\Blog\Models\Label::where('label_type',$label_type)
        ->get()
        ->pluck('title','label_id');


	$field=transFields(get_defined_vars());
	//$opts=$options['field']->options; 
	//$field=transFields(get_defined_vars());
	//dddx($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

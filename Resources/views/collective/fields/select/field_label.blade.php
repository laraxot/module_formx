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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
@php
	$options=[
        0 => trans('pub_theme::txt.day_names_short.sun'),
        1 => trans('pub_theme::txt.day_names_short.mon'),
        2 => trans('pub_theme::txt.day_names_short.tue'),
        3 => trans('pub_theme::txt.day_names_short.wed'),
        4 => trans('pub_theme::txt.day_names_short.thu'),
        5 => trans('pub_theme::txt.day_names_short.fri'),
        6 => trans('pub_theme::txt.day_names_short.sat'),
    ];
	extract($attributes);
	$field=transFields(get_defined_vars());
	//dddx($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
	$options=[
        0 => trans('pub_theme::txt.day_names_short.sun'),
        1 => trans('pub_theme::txt.day_names_short.mon'),
        2 => trans('pub_theme::txt.day_names_short.tue'),
        3 => trans('pub_theme::txt.day_names_short.wed'),
        4 => trans('pub_theme::txt.day_names_short.thu'),
        5 => trans('pub_theme::txt.day_names_short.fri'),
        6 => trans('pub_theme::txt.day_names_short.sat'),
    ];
	extract($attributes);
	$field=transFields(get_defined_vars());
	//dddx($field);
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

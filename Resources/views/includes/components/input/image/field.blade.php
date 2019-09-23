@php
	$field=transFields(get_defined_vars());
	$src=Form::getValueAttribute($name);
	Theme::add('/vendor/laravel-filemanager/js/lfm.js');
	Theme::add('/vendor/laravel-filemanager/css/lfm.css');
	Theme::add($comp_ns.'/js/uploadimg.js');
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		<span class="input-group-btn">
			<img id="holder" style="margin-top:15px;max-height:100px;" src="{{ $src }}">
			<a data-input="{{ $name }}" data-preview="holder" class="btn btn-secondary" id="lfm">
				<i class="fa fa-picture-o"></i> Choose
			</a>
		</span>
		{{ Form::text($name, $value, $field->attributes) }}
	@endslot
@endcomponent
<<<<<<< HEAD
@php
    $field=transFields(get_defined_vars());
    $field->attributes['id']=str_replace('.','-',bracketsToDotted($name));
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
        {{ Form::text($name, $value, $field->attributes) }}
        {{--
        <div class="rateit" data-rateit-backingfld="#{{$name}}" data-rateit-resetable="false"  data-rateit-ispreset="true"
            data-rateit-min="0" data-rateit-max="10">tt
        </div>
        --}}
        <span class="rateit_test" data-rateit-backingfld="#{{ $field->attributes['id'] }}" data-rateit-resetable="false" step="0.5">
        </span>
	@endslot
@endcomponent
=======
@php
    $field=transFields(get_defined_vars());
    $field->attributes['id']=str_replace('.','-',bracketsToDotted($name));
@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
        {{ Form::text($name, $value, $field->attributes) }}
        {{--
        <div class="rateit" data-rateit-backingfld="#{{$name}}" data-rateit-resetable="false"  data-rateit-ispreset="true"
            data-rateit-min="0" data-rateit-max="10">tt
        </div>
        --}}
        <span class="rateit_test" data-rateit-backingfld="#{{ $field->attributes['id'] }}" data-rateit-resetable="false" step="0.5">
        </span>
	@endslot
@endcomponent
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

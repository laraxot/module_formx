@php
    $field=transFields(get_defined_vars());
    unset($field->attributes['name']);
    //dddx($field);
@endphp
{{--
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::text($name, $value, $field->attributes) }}
	@endslot
@endcomponent
--}}
@php
	//ddd(get_defined_vars());
	// $comp_ns = formx::includes.components.input.array
	//Theme::add($comp_ns.'/js/boh.js');
	//Theme::add($comp_ns.'/css/boh.css');
    //dddx(get_defined_vars());
@endphp
<fieldset class="form-group">
<div class="row">
<legend class="col-form-label col-sm-2 pt-0">
    <h3>{{ $name }}</h3>
</legend>

@if(Arr::isAssoc($value))
    @foreach ($value as $k=>$v)
        @php
            $name1=$name.'['.$k.']';
        @endphp
        @if(is_array($v))
            {{ Form::bsArray($name1,$v) }}
        @else
            <div class="col-md-12">
                <label>{{ $k }}</label>
                {{ Form::text($name1, $v, $field->attributes) }}
            </div>
        @endif
    @endforeach
@else
    @foreach ($value as $k=>$v)
        @if(is_array($v))
            {{ Form::bsArray($name.'[]',$v) }}
        @else
            <div class="col-md-12">
                {{ Form::text($name.'[]', $v, $field->attributes) }}
            </div>
        @endif
    @endforeach
@endif
</div>
</fieldset>

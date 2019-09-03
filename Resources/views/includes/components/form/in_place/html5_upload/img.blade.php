@php
	$label=isset($attributes['label'])?$attributes['label']:trans($view.'.field.'.$name);
	$placeholder=isset($attributes['placeholder'])?$attributes['placeholder']:trans($view.'.field.'.$name.'_placeholder');
	$val=Form::getValueAttribute($name);
	$model=Form::getModel();

@endphp

<div class="form-group">
    <label>{{ $label }}</label>
    <div class="dropzone" data-width="400" data-height="400" data-url="{{ route('imgz.canvas') }}"  style="width: 100%;" data-image="{{ $val }}" data-field="{{ $name }}" data-updateurl="{{ $model->update_url }}" data-name="{{ $name }}">
     	{{ Form::file($name.'_thumb', $value, array_merge(['id'=>$name.'_thumb', 'class' => 'form-control'], $attributes)) }}
	</div>
	{{ Form::text($name, $value, array_merge(['id'=>$name,'class' => 'form-control','placeholder'=>$placeholder], $attributes)) }}
	@if ( $errors->has($name) )
		<span class="help-block">
			<strong>{{ $errors->first($name) }}</strong>
		</span>
	@endif
</div>

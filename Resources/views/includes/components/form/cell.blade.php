@php
	//ddd($field);
	$fields=$attributes['fields'];
	$model=Form::getModel(); 
@endphp

<fieldset class="form-group container-fluid" {{--  disabled --}} >
    <legend class="col-form-label col-sm-2 pt-0"><h4>{{ $name }}</h4></legend>
	<div class="row">
    @foreach($fields as $k=>$field)
    	{!! Theme::inputHtml(['row'=>$model,'field'=>$field]) !!}
    @endforeach
	</div>
</fieldset>

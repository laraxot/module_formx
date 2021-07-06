<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
	$name_conf=bracketsToDotted($name).'_confirmation';
	$name_conf=dottedToBrackets($name_conf);
	$without_div=false;
	if(isset($attributes['without_div'])){
		$without_div=$attributes['without_div'];
	}
@endphp
@if($without_div)
@else
<div class="row col-md-12" >
	<div class="col-md-6">
@endif
		{{ Form::bsPassword($name) }}
@if($without_div)
@else
</div>
<div class="col-md-6">
@endif
	{{ Form::bsPassword($name_conf) }}
@if($without_div)
@else

</div>
</div>
@endif
	
=======
@php
	$field=transFields(get_defined_vars());
	$name_conf=bracketsToDotted($name).'_confirmation';
	$name_conf=dottedToBrackets($name_conf);
	$without_div=false;
	if(isset($attributes['without_div'])){
		$without_div=$attributes['without_div'];
	}
@endphp
@if($without_div)
@else
<div class="row col-md-12" >
	<div class="col-md-6">
@endif
		{{ Form::bsPassword($name) }}
@if($without_div)
@else
</div>
<div class="col-md-6">
@endif
	{{ Form::bsPassword($name_conf) }}
@if($without_div)
@else

</div>
</div>
@endif
	
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

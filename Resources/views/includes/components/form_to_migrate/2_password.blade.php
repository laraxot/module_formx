<<<<<<< HEAD
@php
	$field=transFields(get_defined_vars());
	$name_conf=bracketsToDotted($name).'_confirmation';
	$name_conf=dottedToBrackets($name_conf);
@endphp
<div class="row">
<div class="col-sm-6">
	{{ Form::bsPassword($name) }}
</div>
<div class="col-sm-6">
	{{ Form::bsPassword($name_conf) }}
</div>
=======
@php
	$field=transFields(get_defined_vars());
	$name_conf=bracketsToDotted($name).'_confirmation';
	$name_conf=dottedToBrackets($name_conf);
@endphp
<div class="row">
<div class="col-sm-6">
	{{ Form::bsPassword($name) }}
</div>
<div class="col-sm-6">
	{{ Form::bsPassword($name_conf) }}
</div>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
</div>
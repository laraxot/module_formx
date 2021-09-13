<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
</div>
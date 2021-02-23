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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
</div>
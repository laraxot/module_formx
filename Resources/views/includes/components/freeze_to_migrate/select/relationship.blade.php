<<<<<<< HEAD
@php
	//ddd();
	$opts=$row->{$field->relationship}();
	if(isset($opts[$field->value])){
		$label=$opts[$field->value];
	}else{
		$label='---';
	}
	//$label=isset($opts[$field->value])?'SI':'NO';
	//{{ $field->value }}]
@endphp
{{ $label }}
=======
@php
	//ddd();
	$opts=$row->{$field->relationship}();
	if(isset($opts[$field->value])){
		$label=$opts[$field->value];
	}else{
		$label='---';
	}
	//$label=isset($opts[$field->value])?'SI':'NO';
	//{{ $field->value }}]
@endphp
{{ $label }}
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

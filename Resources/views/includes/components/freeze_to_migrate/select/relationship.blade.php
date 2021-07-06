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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

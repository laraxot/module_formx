<<<<<<< HEAD
@php
	//ddd();
	$label='---';
	try{
	$obj=$row->{$field->relationship};
	$panel=Panel::get($obj);
	$label=$panel->optionLabel($obj);
	}catch(\Exception $e){
		
	}
	//$label=$opts->title;
	/*
	if(isset($opts[$field->value])){
		$label=$opts[$field->value];
	}else{
		
	}
	*/
	//$label=isset($opts[$field->value])?'SI':'NO';
	//{{ $field->value }}]
@endphp
{{ $label }}
=======
@php
	//ddd();
	$label='---';
	try{
	$obj=$row->{$field->relationship};
	$panel=Panel::get($obj);
	$label=$panel->optionLabel($obj);
	}catch(\Exception $e){
		
	}
	//$label=$opts->title;
	/*
	if(isset($opts[$field->value])){
		$label=$opts[$field->value];
	}else{
		
	}
	*/
	//$label=isset($opts[$field->value])?'SI':'NO';
	//{{ $field->value }}]
@endphp
{{ $label }}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

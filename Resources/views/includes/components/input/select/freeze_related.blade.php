@php
	$class=$field->related_class;
	if(class_exists($class)){
		$obj=$class::find($field->value);
		if(!is_object($obj)){
			$obj=new \stdClass();
			$obj->nome='Not Exists ['.$class.']['.$field->value.']';
		}
	}else{
		$obj=new \stdClass();
		$obj->nome='Not Exists ['.$class.']';
	}


@endphp
{{ $field->value }}]{{ $obj->nome }}

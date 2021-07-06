<<<<<<< HEAD
@php
	$class=$field->related_class;
	if(class_exists($class)){
		$obj=$class::find($field->value);
		if(!is_object($obj)){
			$obj=new \stdClass();
			$obj->nome='Not Exists ['.$class.']['.$field->value.']';
		}else{
			if($obj->nome==''){
				$obj_panel=Panel::get($obj);
				$obj->nome=$obj_panel->optionLabel($obj);
			}
		}
	}else{
		$obj=new \stdClass();
		$obj->nome='Not Exists ['.$class.']';
	}


@endphp
{{ $field->value }}]{{ $obj->nome }}
=======
@php
	$class=$field->related_class;
	if(class_exists($class)){
		$obj=$class::find($field->value);
		if(!is_object($obj)){
			$obj=new \stdClass();
			$obj->nome='Not Exists ['.$class.']['.$field->value.']';
		}else{
			if($obj->nome==''){
				$obj_panel=Panel::get($obj);
				$obj->nome=$obj_panel->optionLabel($obj);
			}
		}
	}else{
		$obj=new \stdClass();
		$obj->nome='Not Exists ['.$class.']';
	}


@endphp
{{ $field->value }}]{{ $obj->nome }}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

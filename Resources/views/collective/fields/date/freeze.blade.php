<<<<<<< HEAD
@php
	if ($field->value instanceof \Carbon\Carbon) {
		if($field->value->year<1){
			return '';
		}
		echo $field->value->format('d/m/Y');
	}else{
		echo $field->value;
	}
@endphp
=======
@php
	if ($field->value instanceof \Carbon\Carbon) {
		if($field->value->year<1){
			return '';
		}
		echo $field->value->format('d/m/Y');
	}else{
		echo $field->value;
	}
@endphp
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

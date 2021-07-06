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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

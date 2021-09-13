<<<<<<< HEAD
<<<<<<< HEAD
@php
	$field->title='ROOT';
	if($field->value!=0){
		$class=get_class($row);
		//$r=$class::where('id',$field->value)->first();
		$r=$class::find($field->value);
		$field->title='-- sconosciuto o cancellato --';
		if(is_object($r)){
			$field->title=$r->title;
		}
	}
@endphp
=======
@php
	$field->title='ROOT';
	if($field->value!=0){
		$class=get_class($row);
		//$r=$class::where('id',$field->value)->first();
		$r=$class::find($field->value);
		$field->title='-- sconosciuto o cancellato --';
		if(is_object($r)){
			$field->title=$r->title;
		}
	}
@endphp
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
	$field->title='ROOT';
	if($field->value!=0){
		$class=get_class($row);
		//$r=$class::where('id',$field->value)->first();
		$r=$class::find($field->value);
		$field->title='-- sconosciuto o cancellato --';
		if(is_object($r)){
			$field->title=$r->title;
		}
	}
@endphp
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
{{ $field->value }} {{ $field->title }}
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
{{ $field->value }}] {{ $field->title }}
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
{{ $field->value }} {{ $field->title }}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

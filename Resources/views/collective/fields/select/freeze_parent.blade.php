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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
{{ $field->value }}] {{ $field->title }}
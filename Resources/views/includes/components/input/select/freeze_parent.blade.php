@php
	$field->title='ROOT';
	if($field->value!=0){
		$class=get_class($row);
		$r=$class::where('post_id',$field->value)->first();
		$field->title=$r->title;
	}
@endphp
{{ $field->value }}] {{ $field->title }}
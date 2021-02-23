<<<<<<< HEAD
@if(is_array($field->value))
	{{ $field->value['value'] }}
@else
@php
	//ddd(get_defined_vars());
@endphp
{{ $row->route }}, {{ $row->street_number }}<br/>
{{ $row->locality}}, {{ $row->administrative_area_level_2 }}, {{ $row->country}}
@endif
=======
@if(is_array($field->value))
	{{ $field->value['value'] }}
@else
@php
	//ddd(get_defined_vars());
@endphp
{{ $row->route }}, {{ $row->street_number }}<br/>
{{ $row->locality}}, {{ $row->administrative_area_level_2 }}, {{ $row->country}}
@endif
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

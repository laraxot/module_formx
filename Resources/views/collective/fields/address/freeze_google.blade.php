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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
@php
	//ddd($field->value);
@endphp
<table>
@foreach($field->value as $k=>$v)
	@if($loop->first)
	<tr>
		@foreach($related_fields as $kf=>$vf)
			<td>{{ str_replace('_',' ',$vf->name) }}</td>
		@endforeach 	
	</tr>
	@endif
	{{--  
    {!! Theme::inputFreeze(['row'=>$row,'field'=>$v]) !!}<br/>
	--}}
	<tr>
	@foreach($related_fields as $kf=>$vf)
		<td>{!! Theme::inputFreeze(['row'=>$v,'field'=>$vf]) !!}</td>
	@endforeach
	</tr>
@endforeach
</table>
=======
@php
	//ddd($field->value);
@endphp
<table>
@foreach($field->value as $k=>$v)
	@if($loop->first)
	<tr>
		@foreach($related_fields as $kf=>$vf)
			<td>{{ str_replace('_',' ',$vf->name) }}</td>
		@endforeach 	
	</tr>
	@endif
	{{--  
    {!! Theme::inputFreeze(['row'=>$row,'field'=>$v]) !!}<br/>
	--}}
	<tr>
	@foreach($related_fields as $kf=>$vf)
		<td>{!! Theme::inputFreeze(['row'=>$v,'field'=>$vf]) !!}</td>
	@endforeach
	</tr>
@endforeach
</table>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
<a href="{{ url($manage_url) }}" class="btn btn-warning"><i class="fas fa-wrench"></i>&nbsp;Manage</a>
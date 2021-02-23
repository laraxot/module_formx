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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
<a href="{{ url($manage_url) }}" class="btn btn-warning"><i class="fas fa-wrench"></i>&nbsp;Manage</a>
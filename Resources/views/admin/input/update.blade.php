<<<<<<< HEAD
@extends('adm_theme::layouts.app')
@section('content')
	@php
		$data=request()->all();
		$value=$data['test'];
		$row->type=Str::after($row->type,'bs');
	@endphp
	[{{ $value }}]
	{!! Theme::inputFreeze(['field'=>$row,'row'=>$data,'value'=>$value]) !!}	
=======
@extends('adm_theme::layouts.app')
@section('content')
	@php
		$data=request()->all();
		$value=$data['test'];
		$row->type=Str::after($row->type,'bs');
	@endphp
	[{{ $value }}]
	{!! Theme::inputFreeze(['field'=>$row,'row'=>$data,'value'=>$value]) !!}	
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endsection
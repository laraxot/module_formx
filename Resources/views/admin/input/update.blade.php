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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endsection
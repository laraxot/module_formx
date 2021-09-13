<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
@endsection
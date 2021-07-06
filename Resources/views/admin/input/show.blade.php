<<<<<<< HEAD
@extends('adm_theme::layouts.app')
@section('content')
@php
	$input_type=$row->type;
@endphp

{{ Form::open() }}
@method('put')
{{ Form::$input_type('test') }}
{{ Form::bsSubmit('test') }}
{{ Form::close() }}
=======
@extends('adm_theme::layouts.app')
@section('content')
@php
	$input_type=$row->type;
@endphp

{{ Form::open() }}
@method('put')
{{ Form::$input_type('test') }}
{{ Form::bsSubmit('test') }}
{{ Form::close() }}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endsection
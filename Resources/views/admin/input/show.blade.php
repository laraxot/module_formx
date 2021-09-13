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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
@endsection
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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endsection
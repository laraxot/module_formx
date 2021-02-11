@extends('pub_theme::layouts.app')
@section('content')
    @php
    $tests=['calendar.v1','calendar.v2'];
    @endphp
    [{{ $view }}]
    @foreach ($tests as $test)
        {{ $test }}
    @endforeach
@endsection

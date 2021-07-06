@extends('pub_theme::layouts.app')
@section('content')
<<<<<<< HEAD
    @php
    $tests=['calendar.v1','calendar.v2'];
    @endphp
    [{{ $view }}]
    @foreach ($tests as $test)
        {{ $test }}
    @endforeach
=======
    @include($view.'.head')
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endsection

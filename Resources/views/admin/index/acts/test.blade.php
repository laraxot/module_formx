<<<<<<< HEAD
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
=======
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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

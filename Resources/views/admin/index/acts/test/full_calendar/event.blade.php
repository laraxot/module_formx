@extends('pub_theme::layouts.app')
@section('content')
    @include($view.'.head')

    @livewire('formx::full_calendar.event',['model_class'=>'\Modules\Blog\Models\Event'])
@endsection

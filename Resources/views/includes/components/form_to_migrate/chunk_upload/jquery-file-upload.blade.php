<<<<<<< HEAD
@extends('layout')

@section('page-title', 'jQuery File Upload')

@section('body-end')
    <script src="{{ asset('vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('vendor/blueimp-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('vendor/blueimp-file-upload/js/jquery.fileupload.js') }}"></script>
@endsection

@section('content')
    <h2>Example blueimp</h2>
    <div class="text-center">
        <input id="fileupload" type="file" name="file" data-url="{{ url('upload') }}" style="display: inline;">
        <ul id="file-upload-list" class="list-unstyled">

        </ul>
    </div>
=======
@extends('layout')

@section('page-title', 'jQuery File Upload')

@section('body-end')
    <script src="{{ asset('vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('vendor/blueimp-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('vendor/blueimp-file-upload/js/jquery.fileupload.js') }}"></script>
@endsection

@section('content')
    <h2>Example blueimp</h2>
    <div class="text-center">
        <input id="fileupload" type="file" name="file" data-url="{{ url('upload') }}" style="display: inline;">
        <ul id="file-upload-list" class="list-unstyled">

        </ul>
    </div>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endsection
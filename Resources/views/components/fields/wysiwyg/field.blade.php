@php
Theme::add('formx::dist/js/app.js');
Theme::add('formx::dist/css/app.css');
@endphp
<textarea {{ $attributes->merge($attrs) }}></textarea>

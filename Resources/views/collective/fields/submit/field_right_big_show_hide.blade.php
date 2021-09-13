@php
Theme::add($comp_ns . '/js/script.js');
@endphp

<div class="form-group">
<<<<<<< HEAD
    {{ Form::submit($name, array_merge(['class' => 'btn btn-success'], $attributes)) }}
=======
    {{ Form::submit($name, array_merge(['id' => 'submitButton', 'class' => 'btn btn-info', 'style' => 'display:none;'], $attributes)) }}
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
</div>

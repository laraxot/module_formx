@php
Theme::add($comp_ns . '/js/script.js');
@endphp

<div class="form-group">
    {{ Form::submit($name, array_merge(['class' => 'btn btn-success'], $attributes)) }}
</div>

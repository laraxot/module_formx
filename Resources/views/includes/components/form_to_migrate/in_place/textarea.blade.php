<<<<<<< HEAD
@php
    $value=Form::getValueAttribute($name);
    $model=Form::getModel();
    $alertError = trans($view.'.field.'.$name.'_alert');
    Theme::add('formx::js/edit_in_place.js');
    Theme::add('/theme/bc/sweetalert2/dist/sweetalert2.css');
    Theme::add('/theme/bc/sweetalert2/dist/sweetalert2.min.js');
@endphp
<p class="editinplace" style="float:left;" data-url="{{ $model->update_url }}" data-field="{{ $name }}" data-prev-value="" data-null-error="{{ $alertError }}">{{ $value }}</p>
=======
@php
    $value=Form::getValueAttribute($name);
    $model=Form::getModel();
    $alertError = trans($view.'.field.'.$name.'_alert');
    Theme::add('formx::js/edit_in_place.js');
    Theme::add('/theme/bc/sweetalert2/dist/sweetalert2.css');
    Theme::add('/theme/bc/sweetalert2/dist/sweetalert2.min.js');
@endphp
<p class="editinplace" style="float:left;" data-url="{{ $model->update_url }}" data-field="{{ $name }}" data-prev-value="" data-null-error="{{ $alertError }}">{{ $value }}</p>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

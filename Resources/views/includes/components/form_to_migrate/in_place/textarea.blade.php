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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

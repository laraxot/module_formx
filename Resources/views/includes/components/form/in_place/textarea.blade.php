@php
    $value=Form::getValueAttribute($name);
    $model=Form::getModel();
    $alertError = trans($view.'.field.'.$name.'_alert');
    Theme::add('formx::js/edit_in_place.js');
@endphp
<p class="editinplace" style="float:left;" data-url="{{ $model->update_url }}" data-field="{{ $name }}" data-prev-value="" data-null-error="{{ $alertError }}">{{ $value }}</p>

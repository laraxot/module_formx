<<<<<<< HEAD
{{-- Se ID non mostro nulla --}}
{{--
<div wire:model.lazy="{{ $field->key }}"></div>
--}}
<a href="#{{ $form_data[$field->name] ?? ''}}" id="{{ $form_data[$field->name] ?? ''}}">{{ $form_data[$field->name] ?? ''}}</a>
=======
{{-- Se ID non mostro nulla --}}
{{--
<div wire:model.lazy="{{ $field->key }}"></div>
--}}
<a href="#{{ $form_data[$field->name] ?? ''}}" id="{{ $form_data[$field->name] ?? ''}}">{{ $form_data[$field->name] ?? ''}}</a>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

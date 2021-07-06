<<<<<<< HEAD
@php
	// if not otherwise specified, the hidden input should take up no space in the form
    if (!isset($field['wrapperAttributes']) || !isset($field['wrapperAttributes']['class']))
    {
        $field['wrapperAttributes']['class'] = "hidden";
    }
@endphp

<!-- hidden input -->
<div @include('crud::inc.field_wrapper_attributes') >
  <input
  	type="hidden"
    name="{{ $field['name'] }}"
    value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
    @include('crud::inc.field_attributes')
  	>
=======
@php
	// if not otherwise specified, the hidden input should take up no space in the form
    if (!isset($field['wrapperAttributes']) || !isset($field['wrapperAttributes']['class']))
    {
        $field['wrapperAttributes']['class'] = "hidden";
    }
@endphp

<!-- hidden input -->
<div @include('crud::inc.field_wrapper_attributes') >
  <input
  	type="hidden"
    name="{{ $field['name'] }}"
    value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
    @include('crud::inc.field_attributes')
  	>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
</div>
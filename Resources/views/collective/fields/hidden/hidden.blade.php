<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
</div>
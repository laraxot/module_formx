<<<<<<< HEAD
<<<<<<< HEAD
<div class="col-md{{ $array_field->column_width ? '-' . $array_field->column_width : '' }} mb-2 mb-md-0">
    <input
        type="{{ $array_field->input_type }}"
        class="form-control form-control-sm @error($field->key . '.' . $key . '.' . $array_field->name) is-invalid @enderror"
        autocomplete="{{ $array_field->autocomplete }}"
        placeholder="{{ $array_field->placeholder }}"
        wire:model.lazy="{{ $field->key . '.' . $key . '.' . $array_field->name }}">

    @include('laravel-livewire-forms::array-fields.error-help')
</div>
=======
<div class="col-md{{ $array_field->column_width ? '-' . $array_field->column_width : '' }} mb-2 mb-md-0">
    <input
        type="{{ $array_field->input_type }}"
        class="form-control form-control-sm @error($field->key . '.' . $key . '.' . $array_field->name) is-invalid @enderror"
        autocomplete="{{ $array_field->autocomplete }}"
        placeholder="{{ $array_field->placeholder }}"
        wire:model.lazy="{{ $field->key . '.' . $key . '.' . $array_field->name }}">

    @include('laravel-livewire-forms::array-fields.error-help')
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
<div class="col-md{{ $array_field->column_width ? '-' . $array_field->column_width : '' }} mb-2 mb-md-0">
    <input
        type="{{ $array_field->input_type }}"
        class="form-control form-control-sm @error($field->key . '.' . $key . '.' . $array_field->name) is-invalid @enderror"
        autocomplete="{{ $array_field->autocomplete }}"
        placeholder="{{ $array_field->placeholder }}"
        wire:model.lazy="{{ $field->key . '.' . $key . '.' . $array_field->name }}">

    @include('laravel-livewire-forms::array-fields.error-help')
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

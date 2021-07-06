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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
<div class="col-md{{ $array_field->column_width ? '-' . $array_field->column_width : '' }} mb-2 mb-md-0">
    <div class="form-check">
        <input
            id="{{ $field->key . '.' . $key . '.' . $array_field->name }}"
            type="checkbox"
            class="form-check-input @error($field->key . '.' . $key . '.' . $array_field->name) is-invalid @enderror"
            wire:model.lazy="{{ $field->key . '.' . $key . '.' . $array_field->name }}">

        <label class="form-check-label" for="{{ $field->key . '.' . $key . '.' . $array_field->name }}">
            {{ $array_field->placeholder }}
        </label>
    </div>

    @include('laravel-livewire-forms::array-fields.error-help')
</div>
=======
<div class="col-md{{ $array_field->column_width ? '-' . $array_field->column_width : '' }} mb-2 mb-md-0">
    <div class="form-check">
        <input
            id="{{ $field->key . '.' . $key . '.' . $array_field->name }}"
            type="checkbox"
            class="form-check-input @error($field->key . '.' . $key . '.' . $array_field->name) is-invalid @enderror"
            wire:model.lazy="{{ $field->key . '.' . $key . '.' . $array_field->name }}">

        <label class="form-check-label" for="{{ $field->key . '.' . $key . '.' . $array_field->name }}">
            {{ $array_field->placeholder }}
        </label>
    </div>

    @include('laravel-livewire-forms::array-fields.error-help')
</div>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

<<<<<<< HEAD
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <input
            id="{{ $field->name }}"
            type="password"
            class="form-control @error($field->key) is-invalid @enderror"
            autocomplete="{{ $field->autocomplete }}"
            placeholder="{{ $field->placeholder }}"
            wire:model.lazy="{{ $field->key }}">

        @include('formx::livewire.fields.error-help')
    </div>
</div>
=======
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <input
            id="{{ $field->name }}"
            type="password"
            class="form-control @error($field->key) is-invalid @enderror"
            autocomplete="{{ $field->autocomplete }}"
            placeholder="{{ $field->placeholder }}"
            wire:model.lazy="{{ $field->key }}">

        @include('formx::livewire.fields.error-help')
    </div>
</div>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

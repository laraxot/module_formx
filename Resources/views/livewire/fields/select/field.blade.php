<<<<<<< HEAD
<<<<<<< HEAD
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <select
            id="{{ $field->name }}"
            class="custom-select @error($field->key) is-invalid @enderror"
            wire:model.lazy="{{ $field->key }}">

            <option value="">{{ $field->placeholder }}</option>

            @foreach($field->options as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
=======
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <select
            id="{{ $field->name }}"
            class="custom-select @error($field->key) is-invalid @enderror"
            wire:model.lazy="{{ $field->key }}">

            <option value="">{{ $field->placeholder }}</option>

            @foreach($field->options as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <select
            id="{{ $field->name }}"
            class="custom-select @error($field->key) is-invalid @enderror"
            wire:model.lazy="{{ $field->key }}">

            <option value="">{{ $field->placeholder }}</option>

            @foreach($field->options as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

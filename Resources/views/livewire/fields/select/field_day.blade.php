<<<<<<< HEAD
<<<<<<< HEAD
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
    @php
        $daynames = [
            trans('formx::txt.day_names.sun'),
            trans('formx::txt.day_names.mon'),
            trans('formx::txt.day_names.tue'),
            trans('formx::txt.day_names.wed'),
            trans('formx::txt.day_names.thu'),
            trans('formx::txt.day_names.fri'),
            trans('formx::txt.day_names.sat'),
        ];
    @endphp

    <div class="col-md">
        <select
            id="{{ $field->name }}"
            class="custom-select @error($field->key) is-invalid @enderror"
            wire:model.lazy="{{ $field->key }}">

            <option value="">{{ $field->placeholder }}</option>

            @foreach($daynames as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>


        @include('formx::livewire.fields.error-help')
    </div>
</div>
=======
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
    @php
        $daynames = [
            trans('formx::txt.day_names.sun'),
            trans('formx::txt.day_names.mon'),
            trans('formx::txt.day_names.tue'),
            trans('formx::txt.day_names.wed'),
            trans('formx::txt.day_names.thu'),
            trans('formx::txt.day_names.fri'),
            trans('formx::txt.day_names.sat'),
        ];
    @endphp

    <div class="col-md">
        <select
            id="{{ $field->name }}"
            class="custom-select @error($field->key) is-invalid @enderror"
            wire:model.lazy="{{ $field->key }}">

            <option value="">{{ $field->placeholder }}</option>

            @foreach($daynames as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>


        @include('formx::livewire.fields.error-help')
    </div>
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
    @php
        $daynames = [
            trans('formx::txt.day_names.sun'),
            trans('formx::txt.day_names.mon'),
            trans('formx::txt.day_names.tue'),
            trans('formx::txt.day_names.wed'),
            trans('formx::txt.day_names.thu'),
            trans('formx::txt.day_names.fri'),
            trans('formx::txt.day_names.sat'),
        ];
    @endphp

    <div class="col-md">
        <select
            id="{{ $field->name }}"
            class="custom-select @error($field->key) is-invalid @enderror"
            wire:model.lazy="{{ $field->key }}">

            <option value="">{{ $field->placeholder }}</option>

            @foreach($daynames as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>


        @include('formx::livewire.fields.error-help')
    </div>
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

<<<<<<< HEAD
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>



    <div class="col-md">
            <div class="time_flatpickr input-group mb-3">


                <input data-input
            id="{{ $field->name }}"
            type="text"
            class="form-control @error($field->key) is-invalid @enderror"
            autocomplete="{{ $field->autocomplete }}"
            placeholder="{{ $field->placeholder }}"
            wire:model.lazy="{{ $field->key }}">


                <div class="input-group-append">
                    <a class="btn btn-outline-secondary" title="toggle" data-toggle>
                        <i class="far fa-clock"></i>
                    </a>
                </div>
                <div class="input-group-append">
                    <a class="btn btn-outline-secondary" title="clear" data-clear>
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>


        @include('formx::livewire.fields.error-help')
    </div>
</div>
=======
<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>



    <div class="col-md">
            <div class="time_flatpickr input-group mb-3">


                <input data-input
            id="{{ $field->name }}"
            type="text"
            class="form-control @error($field->key) is-invalid @enderror"
            autocomplete="{{ $field->autocomplete }}"
            placeholder="{{ $field->placeholder }}"
            wire:model.lazy="{{ $field->key }}">


                <div class="input-group-append">
                    <a class="btn btn-outline-secondary" title="toggle" data-toggle>
                        <i class="far fa-clock"></i>
                    </a>
                </div>
                <div class="input-group-append">
                    <a class="btn btn-outline-secondary" title="clear" data-clear>
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>


        @include('formx::livewire.fields.error-help')
    </div>
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

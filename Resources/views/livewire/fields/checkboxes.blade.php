<<<<<<< HEAD
<div class="form-group row">
    <div class="col-md-2 col-form-label text-md-right py-md-0">
        {{ $field->label }}
    </div>

    <div class="col-md">
        @foreach($field->options as $value => $label)
            <div class="form-check">
                <input
                    id="{{ $field->name . '.' . $loop->index }}"
                    type="checkbox"
                    class="form-check-input @error($field->key) is-invalid @enderror"
                    value="{{ $value }}"
                    wire:model.lazy="{{ $field->key }}">

                <label class="form-check-label" for="{{ $field->name . '.' . $loop->index }}">
                    {{ $label }}
                </label>
            </div>
        @endforeach

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
=======
<div class="form-group row">
    <div class="col-md-2 col-form-label text-md-right py-md-0">
        {{ $field->label }}
    </div>

    <div class="col-md">
        @foreach($field->options as $value => $label)
            <div class="form-check">
                <input
                    id="{{ $field->name . '.' . $loop->index }}"
                    type="checkbox"
                    class="form-check-input @error($field->key) is-invalid @enderror"
                    value="{{ $value }}"
                    wire:model.lazy="{{ $field->key }}">

                <label class="form-check-label" for="{{ $field->name . '.' . $loop->index }}">
                    {{ $label }}
                </label>
            </div>
        @endforeach

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

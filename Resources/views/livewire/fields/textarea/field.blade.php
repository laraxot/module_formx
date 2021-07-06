<<<<<<< HEAD
@php
    if(!isset($field)){
        $field=(object)[
            'name'=>$name,
            'key'=>$name,
            'label'=>$name,
            'textarea_rows'=>6,
            'placeholder'=>$name,
            'help'=>$name,
        ];
    }
@endphp

<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <textarea id="{{ $field->name }}" rows="{{ $field->textarea_rows }}"
            class="form-control @error($field->key) is-invalid @enderror" placeholder="{{ $field->placeholder }}"
            wire:model.lazy="{{ $field->key }}"></textarea>
        @include('formx::livewire.fields.error-help')
    </div>
</div>
=======
@php
    if(!isset($field)){
        $field=(object)[
            'name'=>$name,
            'key'=>$name,
            'label'=>$name,
            'textarea_rows'=>6,
            'placeholder'=>$name,
            'help'=>$name,
        ];
    }
@endphp

<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <textarea id="{{ $field->name }}" rows="{{ $field->textarea_rows }}"
            class="form-control @error($field->key) is-invalid @enderror" placeholder="{{ $field->placeholder }}"
            wire:model.lazy="{{ $field->key }}"></textarea>
        @include('formx::livewire.fields.error-help')
    </div>
</div>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

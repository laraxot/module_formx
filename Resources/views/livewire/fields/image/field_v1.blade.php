<<<<<<< HEAD
<<<<<<< HEAD
@php
    //dddx([get_defined_vars(), $form_data['img']]);
    //$value=$form_data[$field->name];
    //Theme::add('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css');
    //Theme::add('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js');
@endphp
{{--
<div class="form-group row">
--}}
@component($field->input_component,get_defined_vars())
	@slot('label')
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
    @endslot
    @slot('input')

    <div class="col-md">

        <input type="file" class="form-control" id="exampleInputName" placeholder="Enter title" wire:model="{{ $field->key }}">

        @include('formx::livewire.fields.error-help')
    </div>
    @endslot
{{--
</div>
--}}
@endcomponent
=======
@php
    //dddx([get_defined_vars(), $form_data['img']]);
    //$value=$form_data[$field->name];
    //Theme::add('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css');
    //Theme::add('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js');
@endphp
{{--
<div class="form-group row">
--}}
@component($field->input_component,get_defined_vars())
	@slot('label')
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
    @endslot
    @slot('input')

    <div class="col-md">

        <input type="file" class="form-control" id="exampleInputName" placeholder="Enter title" wire:model="{{ $field->key }}">

        @include('formx::livewire.fields.error-help')
    </div>
    @endslot
{{--
</div>
--}}
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
    //dddx([get_defined_vars(), $form_data['img']]);
    //$value=$form_data[$field->name];
    //Theme::add('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css');
    //Theme::add('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js');
@endphp
{{--
<div class="form-group row">
--}}
@component($field->input_component,get_defined_vars())
	@slot('label')
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
    @endslot
    @slot('input')

    <div class="col-md">

        <input type="file" class="form-control" id="exampleInputName" placeholder="Enter title" wire:model="{{ $field->key }}">

        @include('formx::livewire.fields.error-help')
    </div>
    @endslot
{{--
</div>
--}}
@endcomponent
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

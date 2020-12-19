@php

    //https://www.javascripting.com/view/switchery
    //https://abpetkov.github.io/switchery/

    $attributes['class']=' form-control js-switch';
    $attributes['wire:model']=$field->key;



    //dddx($form_data[$field->label]);
    //dddx(get_defined_vars());

    Theme::add('formx::plugins/switchery/switchery.min.css');
    Theme::add('formx::plugins/switchery/switchery.min.js');
@endphp
@component($field->input_component,get_defined_vars())
    @slot('input')
        <div class="col-md" wire:ignore>
            <input type="hidden" 
                name="{{ $field->key }}" 
                value="0"
                wire:model.lazy="{{ $field->key }}"
                > 
            {{-- Form::checkbox($field->key,1,$form_data[$field->label],$attributes) --}}

            <input 
                wire:model.lazy="{{ $field->key }}"
                value="{{ $form_data[$field->label] }}" 
                name = {{ $field->key }}
                type="checkbox" class="js-switch" 
                {{ $form_data[$field->label] ? 'checked ' : '' }}
                />
        </div>
	@endslot
@endcomponent

@push('scripts')
<script>
    if(!elems){
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
    }
</script>
@endpush


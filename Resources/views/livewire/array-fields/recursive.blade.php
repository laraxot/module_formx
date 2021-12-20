@if (is_array($value[$array_field->name]))
    @include('formx::livewire.array-fields.array')
@else
    @include('formx::livewire.array-fields.input')
@endif

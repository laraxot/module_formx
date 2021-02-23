@component($input_component)
    @slot('label')
        <label>
            {{ $label }}
        </label>
    @endslot
    @slot('input')
        <input type="email" {{ $attributes }} />
    @endslot
@endcomponent

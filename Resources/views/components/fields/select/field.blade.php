@component($input_component)
    @slot('label')
        <label>
            {{ $label }}
        </label>
    @endslot
    @slot('input')
        @if (isset($props['options']) && is_iterable($props['options']))
            <select {{ $attributes->merge($attrs) }}>
                @foreach ($props['options'] as $k => $v)
                    <option value="{{ $k }}">
                        {{ $v }}
                    </option>
                @endforeach
            </select>
        @else
            controllare {{ $name }}
        @endif
    @endslot
@endcomponent

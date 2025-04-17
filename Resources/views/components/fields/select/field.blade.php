@if (isset($props['options']) && is_iterable($props['options']))
    <select {{ $attributes->merge($attrs) }}>
        <option value="">---</option>
        @foreach ($props['options'] as $k => $v)
            <option value="{{ $k }}" {!! $k == $value ? 'selected' : '' !!}>
                {{ $v }}
            </option>
        @endforeach
    </select>
@else
    options is missing on {{ $name }}
@endif

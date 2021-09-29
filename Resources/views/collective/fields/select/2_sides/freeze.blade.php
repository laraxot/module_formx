@foreach ($rows as $k => $v)
    {{-- Panel::get($v)->optionLabel($v) --}}
    <span class="badge badge-secondary">{{ $v->{$related_fields[1]->name} }}</span>
@endforeach

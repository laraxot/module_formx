@foreach ($rows as $k => $v)
    {{-- Panel::get($v)->optionLabel($v) --}}
    {{-- <span class="badge badge-info">{{ $v->{$related_fields[1]->name} }}</span> --}}
    <x-theme::component type="badge">{{ $v->{$related_fields[1]->name} }}</x-theme::component>
@endforeach
{{-- <div class="badge-colors text-center">
    <span class="badge filter badge-yellow" data-color="yellow">1</span>
    <span class="badge filter badge-blue" data-color="blue">2</span>
    <span class="badge filter badge-green" data-color="green">3</span>
    <span class="badge filter badge-orange active" data-color="orange">4</span>
    <span class="badge filter badge-red" data-color="red">5</span>
</div> --}}

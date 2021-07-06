@php
<<<<<<< HEAD
    //ddd(get_defined_vars());
@endphp
{{-- $field->value --}}
@foreach($rows as $k=>$v)
=======
//ddd(get_defined_vars());
//print_r(get_defined_vars());
@endphp
{{-- $field->value --}}
{{-- campo n'0 ID
    campo n'1 titolo da mostrare --}}

@foreach ($rows as $k => $v)
    {{-- Panel::get($v)->optionLabel($v) --}}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
    <span class="badge badge-secondary">{{ $v->{$related_fields[1]->name} }}</span>
@endforeach

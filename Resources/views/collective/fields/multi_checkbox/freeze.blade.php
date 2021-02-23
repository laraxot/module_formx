@php
    //ddd(get_defined_vars());
@endphp
{{-- $field->value --}}
@foreach($rows as $k=>$v)
    <span class="badge badge-secondary">{{ $v->{$related_fields[1]->name} }}</span>
@endforeach

<<<<<<< HEAD
@php
    //ddd(get_defined_vars());
@endphp
{{-- $field->value --}}
@foreach($rows as $k=>$v)
    <span class="badge badge-secondary">{{ $v->{$related_fields[1]->name} }}</span>
@endforeach
=======
@php
    //ddd(get_defined_vars());
@endphp
{{-- $field->value --}}
@foreach($rows as $k=>$v)
    <span class="badge badge-secondary">{{ $v->{$related_fields[1]->name} }}</span>
@endforeach
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

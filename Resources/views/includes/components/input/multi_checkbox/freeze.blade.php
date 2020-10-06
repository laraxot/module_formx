@php
    //dd(get_defined_vars());
    //$v->$related_fields[1]->name
@endphp
@foreach($rows as $k=>$v)
    <span class="badge badge-secondary">
        {{ Panel::get($v)->optionLabel($v) }}
    </span>
@endforeach

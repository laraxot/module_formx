@php
    if(isset($field->sub_type)){
        $include=$field->view.'_'.$field->sub_type;
    }else{
        return 'WIP';
    }
@endphp
{{-- $field->value --}}
@include($include)

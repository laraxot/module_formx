<<<<<<< HEAD
@php
    if(isset($field->sub_type)){
        $include=$field->view.'_'.$field->sub_type;
    }else{
        return 'WIP';
    }
@endphp
{{-- $field->value --}}
@include($include)
=======
@php
    if(isset($field->sub_type)){
        $include=$field->view.'_'.$field->sub_type;
    }else{
        return 'WIP';
    }
@endphp
{{-- $field->value --}}
@include($include)
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

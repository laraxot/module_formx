<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

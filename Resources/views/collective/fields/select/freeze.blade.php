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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

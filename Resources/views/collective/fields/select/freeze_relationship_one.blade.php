<<<<<<< HEAD
@php
   $txt='---';
   $value=$field->value;
   if(is_object($value)){
        $value_panel=Panel::get($value);
        $txt=$value_panel->optionLabel($value);
   }else{
       //dddx(get_defined_vars()); //4 debug
   }
@endphp
<span class="badge badge-secondary">
    {{ $txt }}
</span>

=======
@php
   $txt='---';
   $value=$field->value;
   if(is_object($value)){
        $value_panel=Panel::get($value);
        $txt=$value_panel->optionLabel($value);
   }else{
       //dddx(get_defined_vars()); //4 debug
   }
@endphp
<span class="badge badge-secondary">
    {{ $txt }}
</span>

>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

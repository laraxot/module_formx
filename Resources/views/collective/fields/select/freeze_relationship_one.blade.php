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

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

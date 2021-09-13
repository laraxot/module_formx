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

>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

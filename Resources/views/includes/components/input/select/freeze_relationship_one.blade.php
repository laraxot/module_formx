@php
   $txt='---';
   $value=$field->value;
   if(is_object($value)){
        $value_panel=Panel::get($value);
        $txt=$value_panel->optionLabel($value);
   }
@endphp
<span class="badge badge-secondary">
    {{ $txt }}
</span>


<<<<<<< HEAD
@php
//dddx();
$label = '---';
try {
    $obj = $row->{$field->relationship};
    $panel = Panel::get($obj);
    $label = $panel->optionLabel($obj);
} catch (\Exception $e) {
}
//$label=$opts->title;
/*
 if(isset($opts[$field->value])){
  $label=$opts[$field->value];
 }else{
  
 }
 */
//$label=isset($opts[$field->value])?'SI':'NO';
//{{ $field->value }}]
@endphp
{{ $label }}
=======
@php
//dddx();
$label = '---';
try {
    $obj = $row->{$field->relationship};
    $panel = Panel::get($obj);
    $label = $panel->optionLabel($obj);
} catch (\Exception $e) {
}
//$label=$opts->title;
/*
 if(isset($opts[$field->value])){
  $label=$opts[$field->value];
 }else{
  
 }
 */
//$label=isset($opts[$field->value])?'SI':'NO';
//{{ $field->value }}]
@endphp
{{ $label }}
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

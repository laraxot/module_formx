<<<<<<< HEAD
<!-- view field -->

<div @include('crud::inc.field_wrapper_attributes') >
  @include($field['view'], ['crud' => $crud, 'entry' => $entry ?? null, 'field' => $field])
</div>
=======
<!-- view field -->

<div @include('crud::inc.field_wrapper_attributes') >
  @include($field['view'], ['crud' => $crud, 'entry' => $entry ?? null, 'field' => $field])
</div>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

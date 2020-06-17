@php
    //da finire


    $row=Form::getModel();
    //$rows=$row->$name; //risultati per l'edit ..
    $related=$row->$name()->getRelated(); 
    $related_panel=Panel::get($related);
    $rows=$related->get()->load('post');
    $related_panel->setRows($rows);
    $opts=$related_panel->optionsSelect();
    //dddx($opts);
    $field=transFields(get_defined_vars());
    $field->attributes['multiple']=true;
@endphp

{{-- Form::select($name.'[id]',$opts,$value,$field->attributes) --}}

<select class="js-example-basic-single" name="state">
  <option value="AL">Alabama</option>
    ...
  <option value="WY">Wyoming</option>
</select>

@push('script')
<script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endpush
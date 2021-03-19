@php
foreach ($field->fields as $k => $v) {
    //try{
    echo '<div class="text-nowrap" style="border-bottom:1px darkgray;">';
    echo $v->label ?? $v->name . ' : ';
    echo Theme::inputFreeze(['row' => $row, 'field' => $v]);
    echo '</div>';
    //}catch(\Exception $e){
    //	ddd($e);
    //}
}
@endphp

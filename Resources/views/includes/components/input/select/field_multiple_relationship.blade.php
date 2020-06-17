@php
    //da finire


    $row=Form::getModel();
    //$rows=$row->$name; //risultati per l'edit ..
    $related=$row->$name()->getRelated(); 
    $related_panel=Panel::get($related);
    $rows=$related->get()->load('post');
    $related_panel->setRows($rows);
    $opts=$related_panel->optionsSelect();
    
    $field=transFields(get_defined_vars());
    $field->attributes['multiple']=true;
@endphp

{{ Form::select($name.'[id]', $opts,$value,$field->attributes) }}
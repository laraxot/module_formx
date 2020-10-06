@php
    //dddx(get_defined_vars());
    if(method_exists($row,$field->name)){
        $method = $field->name;
        $results = $row->$method;
    }else{
        dddx($row->post_type.' non ha questa funzione');
    }
@endphp

@foreach($results as $result)
    <div>{{ $result->title }}</div>
@endforeach
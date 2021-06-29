@php
    $field=transFields(get_defined_vars());
    //dddx([get_defined_vars(),$field]);
    $date_list = $_panel->row->{$name};
    //dddx($lista_data);
@endphp
{{--
<livewire:formx::calendar.stringlist  :date_list="$date_list" />
--}}
@livewire('formx::calendar.stringlist',['date_list'=>$date_list, 'input_name' => $name])
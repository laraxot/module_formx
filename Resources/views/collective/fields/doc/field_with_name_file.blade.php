<<<<<<< HEAD
@php
//sembra non funzionare, in caso di non selezione di nessun file, ritorna null, salvando null

//dddx($value);
$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
@slot('label')
{{ Form::label($name, $field->label , ['class' => 'control-label form-label']) }}
@endslot
@slot('input')
{{ Form::text($name,$value,$field->attributes) }}
<div>File</div>
{{ Form::file($name) }}
@endslot
@endcomponent
@push('scripts')
<script>
    $(document).ready(function() {
        $("input[type='file'][id='{{ $name }}']").change(function(){
            alert($("input[type='file'][id='{{ $name }}']").val());
            //alert("A file has been selected.");
        });
    });
</script>
=======
@php
//sembra non funzionare, in caso di non selezione di nessun file, ritorna null, salvando null

//dddx($value);
$field=transFields(get_defined_vars());
@endphp
@component($blade_component,get_defined_vars())
@slot('label')
{{ Form::label($name, $field->label , ['class' => 'control-label form-label']) }}
@endslot
@slot('input')
{{ Form::text($name,$value,$field->attributes) }}
<div>File</div>
{{ Form::file($name) }}
@endslot
@endcomponent
@push('scripts')
<script>
    $(document).ready(function() {
        $("input[type='file'][id='{{ $name }}']").change(function(){
            alert($("input[type='file'][id='{{ $name }}']").val());
            //alert("A file has been selected.");
        });
    });
</script>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endpush
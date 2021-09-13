<<<<<<< HEAD
@php
//echo '<pre>';print_r($value);echo '</pre>';
@endphp
<ul>
@foreach($options as $k => $opt)
@php
	$check=in_array($opt->id,$value);
@endphp
<br/>
<li>{{ Form::checkbox($name.'[]', $opt->id,$check) }} {{ $opt->nome }}</li>
@endforeach
=======
@php
//echo '<pre>';print_r($value);echo '</pre>';
@endphp
<ul>
@foreach($options as $k => $opt)
@php
	$check=in_array($opt->id,$value);
@endphp
<br/>
<li>{{ Form::checkbox($name.'[]', $opt->id,$check) }} {{ $opt->nome }}</li>
@endforeach
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
</ul>
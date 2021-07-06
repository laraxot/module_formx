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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
</ul>
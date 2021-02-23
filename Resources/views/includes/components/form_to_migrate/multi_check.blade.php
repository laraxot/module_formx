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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
</ul>
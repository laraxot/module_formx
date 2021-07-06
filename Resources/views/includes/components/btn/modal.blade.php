<<<<<<< HEAD
@php
	$tag_attr=[
		'class'=>$btn_class.' ',
		'href'=>$route,
		'data-token'=>csrf_token(),
		'data-id'=>$id,
		'data-href'=>$route,
		'data-target'=>"#myModalAjax",
		'data-toggle'=>"modal",
		'data-title'=>$act,
		'title'=>$act,
	];
	//ddd(http_build_query($tag_attr, '', ' '));//no
	$tag_attr=collect($tag_attr)->map(function($v,$k){
		return $k.'="'.$v.'"';
	})->implode(' ');
@endphp
<a {!! $tag_attr !!}>
	<i class="far fa-{{$act}}"></i>{{-- $route --}}
</a>
=======
@php
	$tag_attr=[
		'class'=>$btn_class.' ',
		'href'=>$route,
		'data-token'=>csrf_token(),
		'data-id'=>$id,
		'data-href'=>$route,
		'data-target'=>"#myModalAjax",
		'data-toggle'=>"modal",
		'data-title'=>$act,
		'title'=>$act,
	];
	//ddd(http_build_query($tag_attr, '', ' '));//no
	$tag_attr=collect($tag_attr)->map(function($v,$k){
		return $k.'="'.$v.'"';
	})->implode(' ');
@endphp
<a {!! $tag_attr !!}>
	<i class="far fa-{{$act}}"></i>{{-- $route --}}
</a>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

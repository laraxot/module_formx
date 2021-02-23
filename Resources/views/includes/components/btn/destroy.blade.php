<<<<<<< HEAD
@php
	/* --sweetaler2 e btnDelete messi nel webpack
	Theme::add('theme/bc/sweetalert2/dist/sweetalert2.min.js');
	Theme::add('theme/bc/sweetalert2/dist/sweetalert2.min.css');
	Theme::add('formx::js/btnDeleteX2.js'); 
	//*/
	//DestructiveAction
/*
<a class="{{ $btn_class }}" href="#" data-token="{{ csrf_token() }}" data-id="{{ $id }}" data-href="{{ $route }}" data-toggle="tooltip" title="Cancella">
	<i class="far fa-trash-alt"></i>
</a>
*/
@endphp
@php
	$tag_attr=[
		'class'=>$btn_class.' btn-confirm-delete btn-danger',
		'href'=>"#",
		'data-token'=>csrf_token(),
		'data-id'=>$id,
		'data-href'=>$route,
		'data-toggle'=>"tooltip",
		'title'=>"Destroy",
	];
	//ddd(http_build_query($tag_attr, '', ' '));//no
	$tag_attr=collect($tag_attr)->map(function($v,$k){
		return $k.'="'.$v.'"';
	})->implode(' ');
@endphp
<a {!! $tag_attr !!}>
	<i class="far fa-trash-alt"></i>{{-- $route --}}
=======
@php
	/* --sweetaler2 e btnDelete messi nel webpack
	Theme::add('theme/bc/sweetalert2/dist/sweetalert2.min.js');
	Theme::add('theme/bc/sweetalert2/dist/sweetalert2.min.css');
	Theme::add('formx::js/btnDeleteX2.js'); 
	//*/
	//DestructiveAction
/*
<a class="{{ $btn_class }}" href="#" data-token="{{ csrf_token() }}" data-id="{{ $id }}" data-href="{{ $route }}" data-toggle="tooltip" title="Cancella">
	<i class="far fa-trash-alt"></i>
</a>
*/
@endphp
@php
	$tag_attr=[
		'class'=>$btn_class.' btn-confirm-delete btn-danger',
		'href'=>"#",
		'data-token'=>csrf_token(),
		'data-id'=>$id,
		'data-href'=>$route,
		'data-toggle'=>"tooltip",
		'title'=>"Destroy",
	];
	//ddd(http_build_query($tag_attr, '', ' '));//no
	$tag_attr=collect($tag_attr)->map(function($v,$k){
		return $k.'="'.$v.'"';
	})->implode(' ');
@endphp
<a {!! $tag_attr !!}>
	<i class="far fa-trash-alt"></i>{{-- $route --}}
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
</a>
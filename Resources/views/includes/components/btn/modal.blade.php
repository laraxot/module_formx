<<<<<<< HEAD
@php
$tag_attr = [
    'class' => $btn_class . ' ',
    'href' => $route,
    'data-token' => csrf_token(),
    'data-id' => $id,
    'data-href' => $route,
    'data-target' => '#myModalAjax',
    'data-toggle' => 'modal',
    'data-title' => $act,
    'title' => $act,
];
//dddx(http_build_query($tag_attr, '', ' '));//no
$tag_attr = collect($tag_attr)
    ->map(function ($v, $k) {
        return $k . '="' . $v . '"';
    })
    ->implode(' ');
@endphp
<a {!! $tag_attr !!}>
    <i class="far fa-{{ $act }}"></i>{{-- $route --}}
</a>
=======
@php
$tag_attr = [
    'class' => $btn_class . ' ',
    'href' => $route,
    'data-token' => csrf_token(),
    'data-id' => $id,
    'data-href' => $route,
    'data-target' => '#myModalAjax',
    'data-toggle' => 'modal',
    'data-title' => $act,
    'title' => $act,
];
//dddx(http_build_query($tag_attr, '', ' '));//no
$tag_attr = collect($tag_attr)
    ->map(function ($v, $k) {
        return $k . '="' . $v . '"';
    })
    ->implode(' ');
@endphp
<a {!! $tag_attr !!}>
    <i class="far fa-{{ $act }}"></i>{{-- $route --}}
</a>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

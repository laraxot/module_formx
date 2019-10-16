@php
	$qs=collect(request()->query())->except(['sort'])->all();
	$sort_by_attributes=[];
	$sort_by_attributes['options']=['id'=>'id','updated_at'=>'updated_at'];
	$sort_by_attributes['label']=' ';
	$sort_by_attributes['placeholder']=' ';
	$sort_order_attributes=[];
	$sort_order_attributes['options']=['desc'=>'desc','asc'=>'asc'];
	$sort_order_attributes['label']=' ';
	$sort_order_attributes['placeholder']=' ';
@endphp
<form  class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right" method="get">
	<div class="input-group">
		{{ Form::bsSelect('sort[by]', Request::input('sort.by'),$sort_by_attributes) }}
		{{ Form::bsSelect('sort[order]', Request::input('sort.order'),$sort_order_attributes) }}
		@foreach($qs as $k=>$v)
			@if(is_array($v))
				@php
					$a=[$k=>$v];
				@endphp
				@foreach(Arr::dot($a) as $k1 => $v1)
				<input type="hidden" name="{{ dottedToBrackets($k1) }}" value="{{ $v1 }}">
				@endforeach
			@else
				<input type="hidden" name="{{ $k }}" value="{{ $v }}" >
			@endif
		@endforeach
		<div class="input-group-append">
			<button class="btn btn-primary" type="submit">
			<i class="fas fa-sort fa-sm"></i>
			</button>
		</div>
	</div>
</form>


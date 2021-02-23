<<<<<<< HEAD
@php
	$qs=collect(request()->query())->except(['sort'])->all();
	$sort_by_attributes=[];
	$sort_by_attributes['options']=array_combine($_panel->orderBy(),$_panel->orderBy());
	$sort_by_attributes['label']=' ';
	$sort_by_attributes['placeholder']=' ';
	$sort_order_attributes=[];
	$sort_order_attributes['options']=['desc'=>'desc','asc'=>'asc'];
	$sort_order_attributes['label']=' ';
	$sort_order_attributes['placeholder']=' ';
	if(!isset($form_class)){
		$form_class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right";
	}
	$common_attrs=[];
	$common_attrs=['placeholder'=>' ','class'=>'form-control'];

@endphp
<form  class="{{ $form_class }}" method="get">
	<div class="input-group">
		{{ Form::select('sort[by]', $sort_by_attributes['options'],Request::input('sort.by'),$common_attrs) }}
		{{ Form::select('sort[order]', $sort_order_attributes['options'],Request::input('sort.order'),$common_attrs) }}
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

=======
@php
	$qs=collect(request()->query())->except(['sort'])->all();
	$sort_by_attributes=[];
	$sort_by_attributes['options']=array_combine($_panel->orderBy(),$_panel->orderBy());
	$sort_by_attributes['label']=' ';
	$sort_by_attributes['placeholder']=' ';
	$sort_order_attributes=[];
	$sort_order_attributes['options']=['desc'=>'desc','asc'=>'asc'];
	$sort_order_attributes['label']=' ';
	$sort_order_attributes['placeholder']=' ';
	if(!isset($form_class)){
		$form_class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right";
	}
	$common_attrs=[];
	$common_attrs=['placeholder'=>' ','class'=>'form-control'];

@endphp
<form  class="{{ $form_class }}" method="get">
	<div class="input-group">
		{{ Form::select('sort[by]', $sort_by_attributes['options'],Request::input('sort.by'),$common_attrs) }}
		{{ Form::select('sort[order]', $sort_order_attributes['options'],Request::input('sort.order'),$common_attrs) }}
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

>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

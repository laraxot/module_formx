{{-- \Request::getRequestUri() --}}
{{-- request()->fullUrl() 
	action="{{ request()->fullUrl() }}"
	--}}
@php
	$qs=collect(request()->query())->except(['q'])->all();
@endphp
<form  class="{{-- d-none --}} d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right" method="get">
	<div class="input-group">
		<select class="form-control" name="sort[by]">
			<option value="id">id</option>
			<option value="updated_at">updated_at</option>
		</select>
		<select class="form-control" name="sort[order]">
			<option  value="desc">Desc</option>
			<option value="asc">Asc</option>
		</select>
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


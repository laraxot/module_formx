
{{ Form::open(['method'=>'GET','class'=>'navbar-form navbar-right','role'=>'search']) }}
<div class="input-group ">
	<span class="input-group-addon btn btn-default">
		<a href="?scoutimport" ><i class="fa fa-refresh"></i></a>
	</span>
	<input type="text" class="form-control" name="q" value="{{ \Request::input('q') }}" placeholder="search ..">
	<span class="input-group-btn">
		<button class="btn btn-default" type="submit">
			<i class="fa fa-search"></i>
		</button>
	</span>
</div>
{{ Form::close() }}

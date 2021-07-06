<<<<<<< HEAD
{{ Form::open(['method'=>'GET','class'=>'navbar-form navbar-right','role'=>'search']) }}
<div class="input-group ">
	<span class="input-group-addon btn btn-default">
		<a href="?scoutgeoimport" ><i class="fa fa-refresh"></i></a>
	</span>
	<span class="input-group-btn">
		<input type="text" class="form-control" name="lat" value="{{ \Request::input('lat') }}" placeholder="lat..">
	</span>
	<span class="input-group-btn">
		<input type="text" class="form-control" name="lng" value="{{ \Request::input('lng') }}" placeholder="lng..">
	</span>
	<span class="input-group-btn">
		<button class="btn btn-default" type="submit">
			<i class="fa fa-search"></i>
		</button>
	</span>
</div>
{{ Form::close() }}
=======
{{ Form::open(['method'=>'GET','class'=>'navbar-form navbar-right','role'=>'search']) }}
<div class="input-group ">
	<span class="input-group-addon btn btn-default">
		<a href="?scoutgeoimport" ><i class="fa fa-refresh"></i></a>
	</span>
	<span class="input-group-btn">
		<input type="text" class="form-control" name="lat" value="{{ \Request::input('lat') }}" placeholder="lat..">
	</span>
	<span class="input-group-btn">
		<input type="text" class="form-control" name="lng" value="{{ \Request::input('lng') }}" placeholder="lng..">
	</span>
	<span class="input-group-btn">
		<button class="btn btn-default" type="submit">
			<i class="fa fa-search"></i>
		</button>
	</span>
</div>
{{ Form::close() }}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ $label }}
	{{ $input }}
	{{--  
	@if(trans($lang.'.'.$name.'_help')!=$lang.'.'.$name.'_help')
	<small class="form-text text-muted">{{ trans($lang.'.'.$name.'_help') }} </small>
	@endif
	--}}
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ $label }}
	{{ $input }}
	{{--  
	@if(trans($lang.'.'.$name.'_help')!=$lang.'.'.$name.'_help')
	<small class="form-text text-muted">{{ trans($lang.'.'.$name.'_help') }} </small>
	@endif
	--}}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
</div>
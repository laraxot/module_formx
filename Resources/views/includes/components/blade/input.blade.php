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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
</div>
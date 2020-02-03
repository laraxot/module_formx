@php
	//--- molto simile al pivot fields --//
	$field=transFields(get_defined_vars());
	$model=Form::getModel();
	$rating_objectives=$model->ratingObjectives;
	$rows=$model->$name;
	$auth_user_id=Auth::id();
@endphp
@foreach($rating_objectives as $ro)
	@isset($ro->post)
		@php
			$input_type='text';
			$input_name=$name.'.'.$ro->post_id.'.pivot.'.'rating';
			$input_name=dottedToBrackets($input_name);
			$input_value=(Arr::get($rows->keyBy('post_id')->toArray(),$ro->post_id.'.pivot.rating'));
			$input_attrs=['label'=>$ro->title];
		@endphp
		{{ Form::bsDecimalJqStar($input_name,$input_value,$input_attrs) }}
		<input type="hidden" name="{{ $name }}[{{ $ro->post_id }}][pivot][auth_user_id]" value="{{ $auth_user_id }}" />
	@endisset
@endforeach
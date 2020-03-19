@php
	//--- molto simile al pivot fields --//
	$field=transFields(get_defined_vars());
	$model=Form::getModel();
    $rating_objectives=$model->ratingObjectives;
@endphp
@foreach($rating_objectives as $ro)
    {{-- $ro --}}
    @php
        $input_name=$name.'.'.$ro->post_id.'.pivot.'.'rating';
        $input_name=dottedToBrackets($input_name);
    @endphp
    <rating-one name="{{ $input_name }}" value="{{ $ro->rating_my }}" title="{{ $ro->title }}"></rating-one>
    <input type="hidden" name="{{ $name }}[{{ $ro->post_id }}][pivot][auth_user_id]" value="{{ Auth::id() }}" />
@endforeach

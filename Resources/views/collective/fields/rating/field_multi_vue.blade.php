<<<<<<< HEAD
@php
	//--- molto simile al pivot fields --//
	$field=transFields(get_defined_vars());
	$model=Form::getModel();
    $rating_objectives=$model->ratingObjectives;
@endphp
@foreach($rating_objectives as $ro)
    {{-- $ro --}}
    @php
        $name='myRatings';
        //$input_name=$name.'.'.$ro->post_id.'.pivot.'.'rating';
        $input_name=$name.'.'.$ro->id.'.pivot.'.'rating';
        $input_name=dottedToBrackets($input_name);
    @endphp
    <rating-one name="{{ $input_name }}" value="{{ $ro->rating_my }}" title="{{ $ro->title }}"></rating-one>
    {{--
        nel update e' una repitizione, ma nella creazione cosa obbligatoria
        --}}
    <input type="hidden" name="{{ $name }}[{{ $ro->id }}][pivot][auth_user_id]" value="{{ Auth::id() }}" />
@endforeach
=======
@php
	//--- molto simile al pivot fields --//
	$field=transFields(get_defined_vars());
	$model=Form::getModel();
    $rating_objectives=$model->ratingObjectives;
@endphp
@foreach($rating_objectives as $ro)
    {{-- $ro --}}
    @php
        $name='myRatings';
        //$input_name=$name.'.'.$ro->post_id.'.pivot.'.'rating';
        $input_name=$name.'.'.$ro->id.'.pivot.'.'rating';
        $input_name=dottedToBrackets($input_name);
    @endphp
    <rating-one name="{{ $input_name }}" value="{{ $ro->rating_my }}" title="{{ $ro->title }}"></rating-one>
    {{--
        nel update e' una repitizione, ma nella creazione cosa obbligatoria
        --}}
    <input type="hidden" name="{{ $name }}[{{ $ro->id }}][pivot][auth_user_id]" value="{{ Auth::id() }}" />
@endforeach
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

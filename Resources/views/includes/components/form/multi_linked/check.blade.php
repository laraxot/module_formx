@php

	$model=Form::getModel();
	//ddd(get_class($model).' '.$name); //Modules\Food\Models\Profile
    if(!method_exists($model, $name)){
    	ddd('create relationship ['.$name.'] on ['.get_class($model).']');
    }
    $user=Auth::user();
    $auth_user_id=is_object($user)?$user->auth_user_id:'NO-SET';
    /*
    $methods=get_class_methods($model->$name());//getMorphClass, getInverse, getPivotClass
    $getter=collect($methods)->filter(function($item){
    	//return Str::startsWith($item,'get');
    	//return Str::contains($item,'Pivot');
    })
    //->dd()
    ;
    */
    //$tmp=$model->$name();

    //ddd($tmp->getMorphType());//post_type
    //ddd($tmp->getMorphClass());// profile
    //ddd($tmp->getInverse()); //false
    //ddd($tmp->getPivotClass());//Modules\Blog\Models\PrivacyMorph
    //ddd($tmp->getResults());// come get ?? collection etc etc
    // ddd($tmp->get()); // sembra uguale
     //ddd($tmp->getRelationExistenceQueryForSelfJoin()); // mancano argomenti
    //ddd($tmp->getExistenceCompareKey()); //privacy_morph.post_id
     //ddd($tmp->getForeignPivotKeyName());// post_id
	//ddd($tmp->getQualifiedForeignPivotKeyName());// privacy_morph.post_id
	//ddd($tmp->getRelatedPivotKeyName());//related_id
     //ddd($tmp->getQualifiedRelatedPivotKeyName());//privacy_morph.related_id
     //ddd($tmp->getParentKeyName());//post_id
 	//ddd($tmp->getQualifiedParentKeyName());//blog_post_profiles.post_id
	//ddd($tmp->getRelatedKeyName());//post_id
    //ddd($tmp->getTable());//privacy_morph
    //ddd($tmp->getRelationName());//privacies
    //ddd($tmp->getPivotAccessor());//pivot
    //ddd($tmp->getEager());//sembra il get
    //ddd($tmp->getRelationExistenceCountQuery()); // mancano argomenti
    //ddd($tmp->getQuery());// oggetto Builder
    //ddd($tmp->getBaseQuery()); // oggetto builder
    //ddd($tmp->getParent());//ogetto profile
    //ddd($tmp->getRelated());//oggetto provacy
    //ddd($tmp->getMorphedModel()); // mancano argomenti
    $pivot_class=$model->$name()->getPivotClass();
    $pivot=new $pivot_class;
    $pivot_panel=Theme::panelModel($pivot);
    $pivot_fields=$pivot_panel->fields();

    $val=$model->$name;
    //$val=$val->keyBy('post_id');
    //ddd($val->keyBy('post_id'));

    //ddd($name);//privacies
    //$all=$model->{'all_'.$name};
    $model_linked=Theme::xotModel(Str::singular($name));
    $_panel=Theme::panelModel($model_linked);
		$all=!is_null($model_linked)?$model_linked->get():[];
  	//ddd($all);
@endphp
<ul>
@foreach($all as $k => $v)
	@php
		$input_name=$name.'['.$v->post_id.']';
		$input_value=1;
		$obj=$val->firstWhere('post_id',$v->post_id);

		if(is_object($obj)){
			$checked=($obj->pivot->value);
		}else{
			$checked=0;
		}
		$options=['class'=>'form-control'];
	@endphp
	<li>
		{{--
	{{ Form::checkbox($input_name.'[value]', $input_value, $checked,$options) }}
	{{ Form::text($input_name.'[value]', $checked ) }}
	{{ Form::text($input_name.'[title]',$v->title) }}
	{{ Form::text($input_name.'[auth_user_id]',\Auth::user()->auth_user_id) }}
	--}}
		@foreach($pivot_fields as $pf)
			{{ $pf->name }}
			{{--
			@if($loop->first)
			@endif
			{{ Form::text($input_name.'['.$pf->name.']') }}
			--}}
			{{ Form::text($input_name.'[pivot]['.$pf->name.']') }}
		@endforeach

	{{ $_panel->optionId($v) }} - {{ $_panel->optionLabel($v) }}  [user_id: {{ $auth_user_id }}]
	</li>
@endforeach
</ul>

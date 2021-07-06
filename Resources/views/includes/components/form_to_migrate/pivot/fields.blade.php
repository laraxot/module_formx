<<<<<<< HEAD
@php
	$model=Form::getModel(); //Modules\Food\Models\Profile
	if(!method_exists($model, $name)){
		ddd('create relationship ['.$name.'] on ['.get_class($model).']');
	}
	$user=Auth::user();
	$auth_user_id=is_object($user)?$user->auth_user_id:'NO-SET';
	$rows=$model->$name();
	//debug_getter_obj(['obj'=>$rows]);

	$pivot_class=$rows->getPivotClass();
	$pivot=new $pivot_class;
	$pivot_panel=Theme::panelModel($pivot);
	$pivot_panel->setRows($rows);
	$pivot_fields=$pivot_panel->editFields();

	$val=$model->$name;

	$related=$rows->getRelated();
	$_panel=Theme::panelModel($related);
	$all=$related->get();
	//ddd($all);

@endphp
<fieldset>
	<legend><b>@lang($trad.'.'.$name.'.title')</b></legend>
	@foreach($all as $k => $v)
		<div class="row">
		@foreach($pivot_fields as $pf)
			@php
				//$input_name=$name.'['.$v->post_id.'][pivot]['.$pf->name.']';
				$input_name=$name.'.'.$v->post_id.'.pivot.'.$pf->name.'';
				$input_name=dottedToBrackets($input_name);
				$input_type='bs'.$pf->type;

				//$input_value=(isset($field->value)?$field->value:null);
				if(!isset($pf->col_bs_size)) $pf->col_bs_size=12;
				if(!isset($pf->attributes))  $pf->attributes=[];
				$input_attrs=$pf->attributes;
				$input_value=(isset($field->value)?$field->value:null);
				$input_attrs['label']=$v->title;
				$input_attrs['text']=$v->txt;


				//if($pf->type=='Boolean'){
				//}
				//$input_value=$v->{$pf->name};
				//ddd($related->where('post_id',$v->post_id));
				$name_sub=last(explode('.',$pf->name));
				$input_value=$v->{$name_sub};
				//echo '<br> GG['.$name_sub.']['.$input_value.']GG</hr>';
				/*
				if($pf->type=='Hidden' && $pf->name=='title'){ //forzatura
					$input_value=$v->title;
				}
				*/
				//if($pf->name==$k){
					//ddd($pf); //title
					//ddd('preso ['.$k.']');
					//ddd($v);
					//echo '<br> GG['.$pf->name.']['.$k.']GG</hr>';
				//}

			@endphp

			@if($input_type=='bsHidden')
			{{ Form::$input_type($input_name,$input_value,$input_attrs) }}
			@else
			<div class="col">
			{{ Form::$input_type($input_name,$input_value,$input_attrs) }}
			</div>
			@endif

		@endforeach
		</div>
	@endforeach
</fieldset>
=======
@php
	$model=Form::getModel(); //Modules\Food\Models\Profile
	if(!method_exists($model, $name)){
		ddd('create relationship ['.$name.'] on ['.get_class($model).']');
	}
	$user=Auth::user();
	$auth_user_id=is_object($user)?$user->auth_user_id:'NO-SET';
	$rows=$model->$name();
	//debug_getter_obj(['obj'=>$rows]);

	$pivot_class=$rows->getPivotClass();
	$pivot=new $pivot_class;
	$pivot_panel=Theme::panelModel($pivot);
	$pivot_panel->setRows($rows);
	$pivot_fields=$pivot_panel->editFields();

	$val=$model->$name;

	$related=$rows->getRelated();
	$_panel=Theme::panelModel($related);
	$all=$related->get();
	//ddd($all);

@endphp
<fieldset>
	<legend><b>@lang($trad.'.'.$name.'.title')</b></legend>
	@foreach($all as $k => $v)
		<div class="row">
		@foreach($pivot_fields as $pf)
			@php
				//$input_name=$name.'['.$v->post_id.'][pivot]['.$pf->name.']';
				$input_name=$name.'.'.$v->post_id.'.pivot.'.$pf->name.'';
				$input_name=dottedToBrackets($input_name);
				$input_type='bs'.$pf->type;

				//$input_value=(isset($field->value)?$field->value:null);
				if(!isset($pf->col_bs_size)) $pf->col_bs_size=12;
				if(!isset($pf->attributes))  $pf->attributes=[];
				$input_attrs=$pf->attributes;
				$input_value=(isset($field->value)?$field->value:null);
				$input_attrs['label']=$v->title;
				$input_attrs['text']=$v->txt;


				//if($pf->type=='Boolean'){
				//}
				//$input_value=$v->{$pf->name};
				//ddd($related->where('post_id',$v->post_id));
				$name_sub=last(explode('.',$pf->name));
				$input_value=$v->{$name_sub};
				//echo '<br> GG['.$name_sub.']['.$input_value.']GG</hr>';
				/*
				if($pf->type=='Hidden' && $pf->name=='title'){ //forzatura
					$input_value=$v->title;
				}
				*/
				//if($pf->name==$k){
					//ddd($pf); //title
					//ddd('preso ['.$k.']');
					//ddd($v);
					//echo '<br> GG['.$pf->name.']['.$k.']GG</hr>';
				//}

			@endphp

			@if($input_type=='bsHidden')
			{{ Form::$input_type($input_name,$input_value,$input_attrs) }}
			@else
			<div class="col">
			{{ Form::$input_type($input_name,$input_value,$input_attrs) }}
			</div>
			@endif

		@endforeach
		</div>
	@endforeach
</fieldset>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

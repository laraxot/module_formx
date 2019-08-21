@php
	$model=Form::getModel(); //Modules\Food\Models\Profile
	if(!method_exists($model, $name)){
		ddd('create relationship ['.$name.'] on ['.get_class($model).']');
	}
	$user=Auth::user();
	$auth_user_id=is_object($user)?$user->auth_user_id:'NO-SET';
	$rows=$model->$name();
	//debug_getter_obj(['obj'=>$rows]);
<<<<<<< HEAD
	/*
	  "name" => "getMorphType"                          "ris" => "post_type"
	  "name" => "getMorphClass"                         "ris" => "profile"
	  "name" => "getInverse"                            "ris" => false
	  "name" => "getPivotClass"                         "ris" => "Modules\Blog\Models\PrivacyMorph"
	  "name" => "getResults"                            "ris" => Collection {#759 ▼        #items: []      }
	  "name" => "get"                                   "ris" => Collection {#797 ▼        #items: []      }
	  "name" => "getExistenceCompareKey"                "ris" => "privacy_morph.post_id"
	  "name" => "getRelationCountHash"                  "ris" => "laravel_reserved_0"
	  "name" => "getForeignPivotKeyName"                "ris" => "post_id"
	  "name" => "getQualifiedForeignPivotKeyName"       "ris" => "privacy_morph.post_id"
	  "name" => "getRelatedPivotKeyName"                "ris" => "related_id"
	  "name" => "getQualifiedRelatedPivotKeyName"       "ris" => "privacy_morph.related_id"
	  "name" => "getParentKeyName"                      "ris" => "post_id"
	  "name" => "getQualifiedParentKeyName"             "ris" => "blog_post_profiles.post_id"
	  "name" => "getRelatedKeyName"                     "ris" => "post_id"
	  "name" => "getTable"                              "ris" => "privacy_morph"
	  "name" => "getRelationName"                       "ris" => "privacies"
	  "name" => "getPivotAccessor"                      "ris" => "pivot"
	  "name" => "getEager"                              "ris" => Collection {#825 ▶}
	  "name" => "getQuery"                              "ris" => Builder {#753 ▶}
	  "name" => "getBaseQuery"                          "ris" => Builder {#752 ▶}
	  "name" => "getParent"                             "ris" => Profile {#663 ▶}
	  "name" => "getRelated"                            "ris" => Privacy {#669 ▶}
	*/


=======
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492

	$pivot_class=$rows->getPivotClass();
	$pivot=new $pivot_class;
	$pivot_panel=Theme::panelModel($pivot);
<<<<<<< HEAD
	$pivot_fields=$pivot_panel->fields();
=======
	$pivot_panel->setRows($rows);
	$pivot_fields=$pivot_panel->editFields();
	//ddd(get_class($pivot_panel));//Modules\Blog\Models\Panels\RatingMorphPanel
	//ddd($pivot_fields);
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492
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
<<<<<<< HEAD

				if($pf->type=='Boolean'){
					$input_attrs['label']=$v->title;
					$input_attrs['text']=$v->txt; 
				}
				if($pf->type=='Hidden' && $pf->name==''){
					$input_value=$v->title;
				}

			@endphp
=======
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
			
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492
			@if($input_type=='bsHidden')
			{{ Form::$input_type($input_name,$input_value,$input_attrs) }}
			@else
			<div class="col">
			{{ Form::$input_type($input_name,$input_value,$input_attrs) }}
			</div>
			@endif
<<<<<<< HEAD
=======
			
>>>>>>> c3c3da7d7b6fba6d41f51ec8adeaed24848a2492
		@endforeach
		</div>
	@endforeach
</fieldset>
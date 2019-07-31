@php
	$model=Form::getModel(); //Modules\Food\Models\Profile
	if(!method_exists($model, $name)){
		ddd('create relationship ['.$name.'] on ['.get_class($model).']');
	}
	$user=Auth::user();
	$auth_user_id=is_object($user)?$user->auth_user_id:'NO-SET';
	$rows=$model->$name();
	//debug_getter_obj(['obj'=>$rows]);
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



	$pivot_class=$rows->getPivotClass();
	$pivot=new $pivot_class;
	$pivot_panel=Theme::panelModel($pivot);
	$pivot_fields=$pivot_panel->fields();
	$val=$model->$name;
	
	$related=$rows->getRelated();
	$_panel=Theme::panelModel($related);
	$all=$related->get();
	//ddd($all);
	
@endphp
<fieldset>
	<legend><b>@lang($trad.'.'.$name)</b></legend>
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

				if($pf->type=='Boolean'){
					$input_attrs['label']=$v->title;
					$input_attrs['text']=$v->txt; 
				}
				if($pf->type=='Hidden' && $pf->name==''){
					$input_value=$v->title;
				}

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
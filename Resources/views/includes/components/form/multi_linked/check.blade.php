@php

	$model=Form::getModel();
    if(!method_exists($model, $name)){
    	ddd('create relationship ['.$name.'] on ['.get_class($model).']');
    }
    $user=Auth::user();
    $auth_user_id=is_object($user)?$user->auth_user_id:'NO-SET';
    $pivot_class=$model->$name()->getPivotClass();
    $pivot=new $pivot_class;
    $pivot_panel=Theme::panelModel($pivot);
    $pivot_fields=$pivot_panel->fields();

    $val=$model->$name;
    $model_linked=Theme::xotModel(Str::singular($name));
    $_panel=Theme::panelModel($model_linked);
		$all=!is_null($model_linked)?$model_linked->get():[];
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
		@foreach($pivot_fields as $pf)
			{{ $pf->name }}
			{{ Form::text($input_name.'[pivot]['.$pf->name.']') }}
		@endforeach

	{{ $_panel->optionId($v) }} - {{ $_panel->optionLabel($v) }}  [user_id: {{ $auth_user_id }}]
	</li>
@endforeach
</ul>

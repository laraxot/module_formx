@php
	$options=[];
	extract($attributes);
	//ddd(get_defined_vars());
	$field=transFields(get_defined_vars());
	$row=Form::getModel();
	$row_panel=Panel::get($row);
	//ddd($row_panel);
	//ddd($row_panel->rows([]) );
	$options=$row->get()->map(function($item) use ($row_panel){
		return [
			'id'=>$row_panel->optionId($item),
			'parent_id'=>$item->parent_id,
			'title'=>$row_panel->optionLabel($item),
		];
	})->groupBy('parent_id')
	->all()
	;

	$tmp=[];
	foreach($options[0] as $root){
		$root['title']='-- '.$root['title'];
		$tmp[]=$root;
		$sons=isset($options[$root['id']])?$options[$root['id']]:[];
		foreach($sons as $son){
			$son['title']='---- '.$son['title'];
			$tmp[]=$son;
		}
	}
	/*
	->pluck('title','id')
	->prepend('Root',0)
	->all();
	*/
	//$options[0]='Root';
	$options=collect($tmp)->pluck('title','id')->prepend('Root',0);

@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent

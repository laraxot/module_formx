@php
	$options=[];
	extract($attributes);
	$field=transFields(get_defined_vars());
	$row=Form::getModel();
	$row_panel=Panel::get($row);
	$row_panel->setRows($row);
	/*
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
	$options=collect($tmp)->pluck('title','id')->prepend('Root',0);
	*/
	$options=$row_panel->optionsTree();
@endphp

@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
	@endslot
	@slot('input')
		{{ Form::select($name,$options,$value, $field->attributes) }}
	@endslot
@endcomponent

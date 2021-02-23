<<<<<<< HEAD
@php
    $model=Form::getModel();
    $field=transFields(get_defined_vars());
    $rows=$model->$name();
    /*//--- questa collezione sotto mi serve per vedere se le altre relazioni han bisogno di altro
    $tmp=collect(get_class_methods($rows))
        ->filter(
            function($item){
                return (Str::startsWith($item,'get')
                    && !in_array($item,
                    [
                        'getRelationExistenceQuery',
                        'getRelationExistenceQueryForSelfRelation',
                        'getRelationExistenceCountQuery',
                        'getMorphedModel',
                    ]));
        }
    )->map(
        function($item) use($rows){
            return [$item=>$rows->{$item}()];
        }
    )->collapse();
    */
    //dddx($rows->getRelationName());

    /*
      "getForeignKeyName" => "valutatore_id"
      "getQualifiedForeignKeyName" => "schede.valutatore_id"
      "getOwnerKeyName" => "id"
      "getQualifiedOwnerKeyName" => "stabi_dirigente.id"
      "getRelationName" => "valutatore"
    */
    if(method_exists($rows,'getLocalKeyName')){
        $name1=$rows->getLocalKeyName();
    }else{
        $name1=$rows->getForeignKeyName();
    }
    //$field->name=$name1;
    $field->attributes['name']=$name1;
    $related=$rows->getRelated();
    $related_panel=Panel::get($related);
    $opts=$related_panel->optionsSelect();
@endphp


@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name1, $field->label , ['class' => 'control-label form-label']) }} {{-- $field->label_attributes  --}}
	@endslot
	@slot('input')
		{{ Form::select($name1,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent
=======
@php
    $model=Form::getModel();
    $field=transFields(get_defined_vars());
    $rows=$model->$name();
    /*//--- questa collezione sotto mi serve per vedere se le altre relazioni han bisogno di altro
    $tmp=collect(get_class_methods($rows))
        ->filter(
            function($item){
                return (Str::startsWith($item,'get')
                    && !in_array($item,
                    [
                        'getRelationExistenceQuery',
                        'getRelationExistenceQueryForSelfRelation',
                        'getRelationExistenceCountQuery',
                        'getMorphedModel',
                    ]));
        }
    )->map(
        function($item) use($rows){
            return [$item=>$rows->{$item}()];
        }
    )->collapse();
    */
    //dddx($rows->getRelationName());

    /*
      "getForeignKeyName" => "valutatore_id"
      "getQualifiedForeignKeyName" => "schede.valutatore_id"
      "getOwnerKeyName" => "id"
      "getQualifiedOwnerKeyName" => "stabi_dirigente.id"
      "getRelationName" => "valutatore"
    */
    if(method_exists($rows,'getLocalKeyName')){
        $name1=$rows->getLocalKeyName();
    }else{
        $name1=$rows->getForeignKeyName();
    }
    //$field->name=$name1;
    $field->attributes['name']=$name1;
    $related=$rows->getRelated();
    $related_panel=Panel::get($related);
    $opts=$related_panel->optionsSelect();
@endphp


@component($blade_component,get_defined_vars())
	@slot('label')
	{{ Form::label($name1, $field->label , ['class' => 'control-label form-label']) }} {{-- $field->label_attributes  --}}
	@endslot
	@slot('input')
		{{ Form::select($name1,$opts,$value, $field->attributes) }}
	@endslot
@endcomponent
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

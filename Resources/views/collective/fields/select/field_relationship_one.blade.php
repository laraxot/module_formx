@php
/*----ESEMPIO---
(object) [
    'type' => 'SelectRelationshipOne',
    'name' => 'articlecat', //nome relazione
    'comment' => null,
    'attributes' => ['placeholder' => 'metti quello che vuoi'],
],
*/
//dddx(get_defined_vars());
$model = Form::getModel();
$field = transFields(get_defined_vars());
$rows = $model->$name();
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
if (method_exists($rows, 'getLocalKeyName')) {
    $name1 = $rows->getLocalKeyName();
} else {
    $name1 = $rows->getForeignKeyName();
}
//$field->name=$name1;
$field->attributes['name'] = $name1;
$related = $rows->getRelated();
$related_panel = Panel::get($related);
//dddx($related_panel->optionsSelect());
$opts = $related_panel->optionsSelect();
//dddx($blade_component);
@endphp


@component($blade_component, get_defined_vars())
    @slot('label')
        {{ Form::label($name1, $field->label, ['class' => 'control-label form-label']) }} {{-- $field->label_attributes --}}
    @endslot
    @slot('input')
        {{ Form::select($name1, $opts, $value, $field->attributes) }}
    @endslot
@endcomponent

@php
    //$field=transFields(get_defined_vars());
    $model=Form::getModel();
    $all=$model->$name;
    $model_linked=$model->$name()->getRelated();
    $_panel=Theme::panelModel($model_linked);
    $val=$value;
    if(!is_array($val)){
        $val=[];
    }
@endphp

<br style="clear:both"/>
  <p>{{ trans('lu::help.nota_multiselect') }}</p><br/>
<div class="row">
  <br style="clear:both"/>
    <div class="col-sm-5">
        <select name="{{$name}}[from][]" id="multiselect" class="form-control" size="8" multiple="multiple">
            @foreach($all as $k => $v)
            <option value="{{ $_panel->optionId($v) }}" >{{ $_panel->optionLabel($v) }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-sm-2">
        <button type="button" id="multiselect_rightAll" class="btn btn-block">
            <i class="fas fa-angle-double-right"></i>
        </button>
        <button type="button" id="multiselect_rightSelected" class="btn btn-block">
            <i class="fas fa-chevron-right"></i>
        </button>
        <button type="button" id="multiselect_leftSelected" class="btn btn-block">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" id="multiselect_leftAll" class="btn btn-block">
             <i class="fas fa-angle-double-left"></i>
        </button>
    </div>

    <div class="col-sm-5">
        <select name="{{$name}}[to][]" id="multiselect_to" class="form-control" size="8" multiple="multiple">
            @foreach($val as $k => $v)
            <option value="{{ $_panel->optionId($v) }}" >{{ $_panel->optionLabel($v) }}</option>
            @endforeach
        </select>
    </div>

</div>

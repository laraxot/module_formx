<<<<<<< HEAD
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

<br style="clear:both" />
<p>{{ trans('lu::help.nota_multiselect') }}</p><br />
<div class="row">
    <br style="clear:both" />
    <div class="col-sm-5">
        <select name="{{$name}}[from][]" id="multiselect{{$name}}" class="form-control multiselect" size="8" multiple="multiple">
            @foreach($all as $k => $v)
            <option value="{{ $_panel->optionId($v) }}">{{ $_panel->optionLabel($v) }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-sm-2">
        <button type="button" id="multiselect{{$name}}_rightAll" class="btn btn-block">
            <i class="fas fa-angle-double-right"></i>
        </button>
        <button type="button" id="multiselect{{$name}}_rightSelected" class="btn btn-block">
            <i class="fas fa-chevron-right"></i>
        </button>
        <button type="button" id="multiselect{{$name}}_leftSelected" class="btn btn-block">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" id="multiselect{{$name}}_leftAll" class="btn btn-block">
            <i class="fas fa-angle-double-left"></i>
        </button>
    </div>

    <div class="col-sm-5">
        <select name="{{$name}}[to][]" id="multiselect{{$name}}_to" class="form-control" size="8" multiple="multiple">
            @foreach($val as $k => $v)
            <option value="{{ $_panel->optionId($v) }}">{{ $_panel->optionLabel($v) }}</option>
            @endforeach
        </select>
    </div>

</div>

@push('scripts')
<script type="text/javascript">
    //jQuery is not a function
    //jQuery(document).ready(function($) {
    $(function() {
        $('.multiselect').multiselect();

    });

</script>
@endpush
=======
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

<br style="clear:both" />
<p>{{ trans('lu::help.nota_multiselect') }}</p><br />
<div class="row">
    <br style="clear:both" />
    <div class="col-sm-5">
        <select name="{{$name}}[from][]" id="multiselect{{$name}}" class="form-control multiselect" size="8" multiple="multiple">
            @foreach($all as $k => $v)
            <option value="{{ $_panel->optionId($v) }}">{{ $_panel->optionLabel($v) }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-sm-2">
        <button type="button" id="multiselect{{$name}}_rightAll" class="btn btn-block">
            <i class="fas fa-angle-double-right"></i>
        </button>
        <button type="button" id="multiselect{{$name}}_rightSelected" class="btn btn-block">
            <i class="fas fa-chevron-right"></i>
        </button>
        <button type="button" id="multiselect{{$name}}_leftSelected" class="btn btn-block">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" id="multiselect{{$name}}_leftAll" class="btn btn-block">
            <i class="fas fa-angle-double-left"></i>
        </button>
    </div>

    <div class="col-sm-5">
        <select name="{{$name}}[to][]" id="multiselect{{$name}}_to" class="form-control" size="8" multiple="multiple">
            @foreach($val as $k => $v)
            <option value="{{ $_panel->optionId($v) }}">{{ $_panel->optionLabel($v) }}</option>
            @endforeach
        </select>
    </div>

</div>

@push('scripts')
<script type="text/javascript">
    //jQuery is not a function
    //jQuery(document).ready(function($) {
    $(function() {
        $('.multiselect').multiselect();

    });

</script>
@endpush
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
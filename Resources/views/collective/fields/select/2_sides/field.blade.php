@php
/**
 * https://github.com/crlcu/multiselect
 * bower install multiselect-two-sides
 */
$field=transFields(get_defined_vars());

Theme::addScript($comp_ns.'/js/multiselect.js');
$field_options=$options['field']->options;

$model = Form::getModel();
$rows = $model->$name();
//$rows=$model->user->rights();
//$val = $rows->get();
$val=$field->value;

$related = $rows->getRelated();
$_panel = Panel::get($related);
@endphp

<fieldset class="form-group container-fluid border p-2">
    <legend class="col-form-label col-sm-2 pt-0 w-auto">
        <h4>{{ $name }}</h4>
    </legend>

    <div class="row" style="border:1px solid  dark;">
        <div class="col-sm-12">
            <p>{{ trans('lu::help.nota_multiselect') }}</p>
        </div>
        <br style="clear:both" />
        <div class="col-sm-5">
            <select name="{{ $name }}[from][]" id="multiselect{{ $name }}"
                class="form-control multiselect" size="8" multiple="multiple">
                @foreach ($field_options as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <button type="button" id="multiselect{{ $name }}_rightAll" class="btn btn-block">
                <i class="fas fa-angle-double-right"></i>
            </button>
            <button type="button" id="multiselect{{ $name }}_rightSelected" class="btn btn-block">
                <i class="fas fa-chevron-right"></i>
            </button>
            <button type="button" id="multiselect{{ $name }}_leftSelected" class="btn btn-block">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button" id="multiselect{{ $name }}_leftAll" class="btn btn-block">
                <i class="fas fa-angle-double-left"></i>
            </button>
        </div>
          
        <div class="col-sm-5">
            <select name="{{ $name }}[to][]" id="multiselect{{ $name }}_to" class="form-control"
                size="8" multiple="multiple">
                @foreach ($val as $k => $v)
                    
                    <option value="{{ $_panel->optionId($v) }}">{{ $_panel->optionLabel($v) }}</option>
                @endforeach
            </select>
        </div>
        
    </div>
</fieldset>

@once
@push('scripts')
    <script type="text/javascript">
        //jQuery is not a function
        //jQuery(document).ready(function($) {
        $(function() {
            $('.multiselect').multiselect();

        });
    </script>
@endpush
@endonce

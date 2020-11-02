@php
    //.....................................WIP...................................
    //dddx(get_defined_vars());
    $model = $_instance->model;
    //dddx($model);
@endphp

<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
    <div class="col-md-3">
        <div id="holder" style="margin-top:1px;max-height:150px;">
            <img class="card-img" src="{{ $model->image_src }}">
        </div>
    </div>

</div>


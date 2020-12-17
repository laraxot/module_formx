@php
    $field=transFields(get_defined_vars());
    $src=Form::getValueAttribute($name);
	if($src=='') $src=asset('/img/nophoto.jpg');

	Theme::add('formx::plugins/uppy/uppy.bundle.css');
	Theme::add('formx::plugins/uppy/uppy.bundle.js');
	Theme::add('formx::plugins/uppy/uppy.js');
	
	/*
	<script src="assets/plugins/custom/uppy/uppy.bundle.js"></script>
	<script src="assets/js/pages/crud/file-upload/uppy.js"></script>
	*/

	$field->attributes['id']='post_image_src';
	//dddx(get_defined_vars());

@endphp
@component($blade_component,get_defined_vars())
	@slot('label')
		{{ Form::label($name, $field->label , ['class' => 'control-label']) }}
    @endslot
    @slot('input')
		<div class="col-lg-6">
			<!--begin::Card-->
			<div class="card card-custom card-stretch">
				<div class="card-header">
					<div class="card-title">
						<h3 class="card-label">Auto Upload With External Sources</h3>
					</div>
				</div>
				<div class="card-body">
					<div class="uppy" id="kt_uppy_1">
						<div class="uppy-dashboard"></div>
						<div class="uppy-progress"></div>
					</div>
				</div>
			</div>
			<!--end::Card-->
		</div>



    @endslot
@endcomponent

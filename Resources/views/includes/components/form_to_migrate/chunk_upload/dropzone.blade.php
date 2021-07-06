<<<<<<< HEAD
@php
	Theme::add('/theme/bc/dropzone/dist/dropzone.js');
	Theme::add('/theme/bc/dropzone/dist/dropzone.css');
	Theme::add('backend::includes/components/form/chunk_upload/js/dropzone.js');
@endphp

@push('scripts')
	<script>
		Dropzone.autoDiscover = false;
	</script>
@endpush
	<div class="text-center">

		<form action="{{ url('admin/backend/upload') }}"
			  class="dropzone"
			  id="my-awesome-dropzone">
			<input type="file" name="file" >
		</form>
		<small>Works only in Chrome</small>
		<ul id="file-upload-list" class="list-unstyled">

		</ul>
	</div>
=======
@php
	Theme::add('/theme/bc/dropzone/dist/dropzone.js');
	Theme::add('/theme/bc/dropzone/dist/dropzone.css');
	Theme::add('backend::includes/components/form/chunk_upload/js/dropzone.js');
@endphp

@push('scripts')
	<script>
		Dropzone.autoDiscover = false;
	</script>
@endpush
	<div class="text-center">

		<form action="{{ url('admin/backend/upload') }}"
			  class="dropzone"
			  id="my-awesome-dropzone">
			<input type="file" name="file" >
		</form>
		<small>Works only in Chrome</small>
		<ul id="file-upload-list" class="list-unstyled">

		</ul>
	</div>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

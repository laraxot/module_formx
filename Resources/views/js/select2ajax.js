<<<<<<< HEAD
<<<<<<< HEAD
$(document).ready(function() {
	
	$('.select2ajax').select2({
		theme: 'bootstrap4',
		containerCssClass: ':all:',
		minimumInputLength: 2,
		allowClear: true,
		ajax: {
			
			dataType: "json",
			processResults: function (data) {
				return {
					results: $.map(data, function (item) {
						return {
							text: item.title,
							id: item.title
						};
					})
				};
			}
		}
	});


    $('.simple-select2').select2({
        theme: 'bootstrap4',
        placeholder: "Select an option",
        allowClear: true
    });

    $('.simple-select2-sm').select2({
        theme: 'bootstrap4',
        containerCssClass: ':all:',
        placeholder: "Select an option",
        allowClear: true
    });
 
=======
$(document).ready(function() {
	
	$('.select2ajax').select2({
		theme: 'bootstrap4',
		containerCssClass: ':all:',
		minimumInputLength: 2,
		allowClear: true,
		ajax: {
			
			dataType: "json",
			processResults: function (data) {
				return {
					results: $.map(data, function (item) {
						return {
							text: item.title,
							id: item.title
						};
					})
				};
			}
		}
	});


    $('.simple-select2').select2({
        theme: 'bootstrap4',
        placeholder: "Select an option",
        allowClear: true
    });

    $('.simple-select2-sm').select2({
        theme: 'bootstrap4',
        containerCssClass: ':all:',
        placeholder: "Select an option",
        allowClear: true
    });
 
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
$(document).ready(function() {
	
	$('.select2ajax').select2({
		theme: 'bootstrap4',
		containerCssClass: ':all:',
		minimumInputLength: 2,
		allowClear: true,
		ajax: {
			
			dataType: "json",
			processResults: function (data) {
				return {
					results: $.map(data, function (item) {
						return {
							text: item.title,
							id: item.title
						};
					})
				};
			}
		}
	});


    $('.simple-select2').select2({
        theme: 'bootstrap4',
        placeholder: "Select an option",
        allowClear: true
    });

    $('.simple-select2-sm').select2({
        theme: 'bootstrap4',
        containerCssClass: ':all:',
        placeholder: "Select an option",
        allowClear: true
    });
 
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
});
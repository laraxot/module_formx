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
 
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
});
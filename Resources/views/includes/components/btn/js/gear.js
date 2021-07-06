<<<<<<< HEAD
$(document).ready(function() {
    $('.color-trigger').on('click', function () {
        $(this).parent().toggleClass('visible-palate');
    });
	
	$('.color-palate .colors-list .palate').on('click', function() {
		var newThemeColor = $(this).attr('data-theme-file');
		var targetCSSFile = $('link[id="theme-color-file"]');
	   $(targetCSSFile).attr('href',newThemeColor);
	   $('.color-palate .colors-list .palate').removeClass('active');
        $(this).addClass('active');
	});
=======
$(document).ready(function() {
    $('.color-trigger').on('click', function () {
        $(this).parent().toggleClass('visible-palate');
    });
	
	$('.color-palate .colors-list .palate').on('click', function() {
		var newThemeColor = $(this).attr('data-theme-file');
		var targetCSSFile = $('link[id="theme-color-file"]');
	   $(targetCSSFile).attr('href',newThemeColor);
	   $('.color-palate .colors-list .palate').removeClass('active');
        $(this).addClass('active');
	});
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
});
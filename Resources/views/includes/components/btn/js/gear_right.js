<<<<<<< HEAD
$(document).ready(function() {
    
    /* ======= DEMO THEME CONFIG ====== */
	$('#config-trigger').click(function(e){
    	
		e.preventDefault();
		
		//$("#config-panel").toggleClass('config-panel-open');
		
		if($(this).hasClass('config-panel-open')){
          $("#config-panel").animate({
            right: "-=190" //same as the panel width
           }, 500);
          $(this).removeClass('config-panel-open').addClass('config-panel-hide');
         }
         else {      
         $("#config-panel").animate({
           right: "+=190" //same as the panel width
           }, 500);
          $(this).removeClass('config-panel-hide').addClass('config-panel-open');    
         }
	});
    
    $('#config-close').on('click', function(e) {
        e.preventDefault();
        $('#config-trigger').click();
    });
    
    
    $('#color-options a').on('click', function(e) { 
        var $styleSheet = $(this).attr('data-style');
        
		$('#theme-style').attr('href', $styleSheet);
				
		var $listItem = $(this).closest('li');
		$listItem.addClass('active');
		$listItem.siblings().removeClass('active');
		
		e.preventDefault();
		
		
	});


=======
$(document).ready(function() {
    
    /* ======= DEMO THEME CONFIG ====== */
	$('#config-trigger').click(function(e){
    	
		e.preventDefault();
		
		//$("#config-panel").toggleClass('config-panel-open');
		
		if($(this).hasClass('config-panel-open')){
          $("#config-panel").animate({
            right: "-=190" //same as the panel width
           }, 500);
          $(this).removeClass('config-panel-open').addClass('config-panel-hide');
         }
         else {      
         $("#config-panel").animate({
           right: "+=190" //same as the panel width
           }, 500);
          $(this).removeClass('config-panel-hide').addClass('config-panel-open');    
         }
	});
    
    $('#config-close').on('click', function(e) {
        e.preventDefault();
        $('#config-trigger').click();
    });
    
    
    $('#color-options a').on('click', function(e) { 
        var $styleSheet = $(this).attr('data-style');
        
		$('#theme-style').attr('href', $styleSheet);
				
		var $listItem = $(this).closest('li');
		$listItem.addClass('active');
		$listItem.siblings().removeClass('active');
		
		e.preventDefault();
		
		
	});


>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
});
<<<<<<< HEAD
define( [
	"../ajax"
], function( jQuery ) {

"use strict";

jQuery._evalUrl = function( url ) {
	return jQuery.ajax( {
		url: url,

		// Make this explicit, since user can override this through ajaxSetup (#11264)
		type: "GET",
		dataType: "script",
		cache: true,
		async: false,
		global: false,
		"throws": true
	} );
};

return jQuery._evalUrl;

} );
=======
define( [
	"../ajax"
], function( jQuery ) {

"use strict";

jQuery._evalUrl = function( url ) {
	return jQuery.ajax( {
		url: url,

		// Make this explicit, since user can override this through ajaxSetup (#11264)
		type: "GET",
		dataType: "script",
		cache: true,
		async: false,
		global: false,
		"throws": true
	} );
};

return jQuery._evalUrl;

} );
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
<<<<<<< HEAD
define( [
	"../core",
	"../selector",
	"../effects"
], function( jQuery ) {

"use strict";

jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};

} );
=======
define( [
	"../core",
	"../selector",
	"../effects"
], function( jQuery ) {

"use strict";

jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};

} );
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
define( [
	"../core",
	"../selector",
	"../effects"
], function( jQuery ) {

"use strict";

jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};

} );
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

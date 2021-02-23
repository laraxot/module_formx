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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

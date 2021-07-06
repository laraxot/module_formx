<<<<<<< HEAD
define( [
	"../core",
	"../selector"
], function( jQuery ) {

"use strict";

jQuery.expr.pseudos.hidden = function( elem ) {
	return !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
	return !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};

} );
=======
define( [
	"../core",
	"../selector"
], function( jQuery ) {

"use strict";

jQuery.expr.pseudos.hidden = function( elem ) {
	return !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
	return !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};

} );
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

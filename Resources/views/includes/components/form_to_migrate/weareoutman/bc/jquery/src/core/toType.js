<<<<<<< HEAD
define( [
	"../var/class2type",
	"../var/toString"
], function( class2type, toString ) {

"use strict";

function toType( obj ) {
	if ( obj == null ) {
		return obj + "";
	}

	// Support: Android <=2.3 only (functionish RegExp)
	return typeof obj === "object" || typeof obj === "function" ?
		class2type[ toString.call( obj ) ] || "object" :
		typeof obj;
}

return toType;
} );
=======
define( [
	"../var/class2type",
	"../var/toString"
], function( class2type, toString ) {

"use strict";

function toType( obj ) {
	if ( obj == null ) {
		return obj + "";
	}

	// Support: Android <=2.3 only (functionish RegExp)
	return typeof obj === "object" || typeof obj === "function" ?
		class2type[ toString.call( obj ) ] || "object" :
		typeof obj;
}

return toType;
} );
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

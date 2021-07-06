<<<<<<< HEAD
define( function() {

"use strict";

return function( n, elem ) {
	var matched = [];

	for ( ; n; n = n.nextSibling ) {
		if ( n.nodeType === 1 && n !== elem ) {
			matched.push( n );
		}
	}

	return matched;
};

} );
=======
define( function() {

"use strict";

return function( n, elem ) {
	var matched = [];

	for ( ; n; n = n.nextSibling ) {
		if ( n.nodeType === 1 && n !== elem ) {
			matched.push( n );
		}
	}

	return matched;
};

} );
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

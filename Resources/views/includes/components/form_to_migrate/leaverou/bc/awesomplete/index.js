<<<<<<< HEAD
/* global Awesomplete, $:true, $$:true */
$ = Awesomplete.$;
$$ = Awesomplete.$$;

document.addEventListener("DOMContentLoaded", function() {
	var nav = $("nav")
	$$("section > h1").forEach(function (h1) {
		if (h1.parentNode.id) {
			$.create("a", {
				href: "#" + h1.parentNode.id,
				textContent: h1.textContent.replace(/\(.+?\)/g, ""),
				inside: nav
			});
		}
	});
=======
/* global Awesomplete, $:true, $$:true */
$ = Awesomplete.$;
$$ = Awesomplete.$$;

document.addEventListener("DOMContentLoaded", function() {
	var nav = $("nav")
	$$("section > h1").forEach(function (h1) {
		if (h1.parentNode.id) {
			$.create("a", {
				href: "#" + h1.parentNode.id,
				textContent: h1.textContent.replace(/\(.+?\)/g, ""),
				inside: nav
			});
		}
	});
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
});
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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
});
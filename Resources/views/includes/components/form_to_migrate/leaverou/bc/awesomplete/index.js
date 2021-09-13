<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
});
<<<<<<< HEAD
describe("blur event", function () {

	$.fixture("plain");

	subject(function () { return new Awesomplete("#plain") });

	it("closes completer", function () {
		spyOn(Awesomplete.prototype, "close");
		$.fire(this.subject.input, "blur");
		expect(Awesomplete.prototype.close).toHaveBeenCalledWith(
			{ reason: "blur" },
			jasmine.any(document.createEvent("HTMLEvents").constructor)
		);
	});
});
=======
describe("blur event", function () {

	$.fixture("plain");

	subject(function () { return new Awesomplete("#plain") });

	it("closes completer", function () {
		spyOn(Awesomplete.prototype, "close");
		$.fire(this.subject.input, "blur");
		expect(Awesomplete.prototype.close).toHaveBeenCalledWith(
			{ reason: "blur" },
			jasmine.any(document.createEvent("HTMLEvents").constructor)
		);
	});
});
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

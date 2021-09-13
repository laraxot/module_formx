<<<<<<< HEAD
describe("input event", function () {

	$.fixture("plain");

	subject(function () { return new Awesomplete("#plain") });

	it("rebuilds the list", function () {
		spyOn(Awesomplete.prototype, "evaluate");
		$.type(this.subject.input, "ite");
		expect(Awesomplete.prototype.evaluate).toHaveBeenCalled();
	});
});
=======
describe("input event", function () {

	$.fixture("plain");

	subject(function () { return new Awesomplete("#plain") });

	it("rebuilds the list", function () {
		spyOn(Awesomplete.prototype, "evaluate");
		$.type(this.subject.input, "ite");
		expect(Awesomplete.prototype.evaluate).toHaveBeenCalled();
	});
});
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

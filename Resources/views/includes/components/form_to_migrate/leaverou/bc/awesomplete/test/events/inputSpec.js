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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

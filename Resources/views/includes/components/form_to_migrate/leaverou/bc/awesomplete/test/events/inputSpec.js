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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

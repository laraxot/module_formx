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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

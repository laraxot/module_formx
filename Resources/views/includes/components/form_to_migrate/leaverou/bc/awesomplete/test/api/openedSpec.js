<<<<<<< HEAD
describe("awesomplete.opened", function () {

	$.fixture("plain");

	subject(function () { return new Awesomplete("#plain") });

	describe("with newly created completer", function () {
		it("is false", function () {
			expect(this.subject.opened).toBe(false);
		});
	});

	describe("with opened completer", function () {
		it("is true", function () {
			this.subject.open();
			expect(this.subject.opened).toBe(true);
		});
	});

	describe("with closed completer", function () {
		it("is false", function () {
			this.subject.close();
			expect(this.subject.opened).toBe(false);
		});
	});
});
=======
describe("awesomplete.opened", function () {

	$.fixture("plain");

	subject(function () { return new Awesomplete("#plain") });

	describe("with newly created completer", function () {
		it("is false", function () {
			expect(this.subject.opened).toBe(false);
		});
	});

	describe("with opened completer", function () {
		it("is true", function () {
			this.subject.open();
			expect(this.subject.opened).toBe(true);
		});
	});

	describe("with closed completer", function () {
		it("is false", function () {
			this.subject.close();
			expect(this.subject.opened).toBe(false);
		});
	});
});
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

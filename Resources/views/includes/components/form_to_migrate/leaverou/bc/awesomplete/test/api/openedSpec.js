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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

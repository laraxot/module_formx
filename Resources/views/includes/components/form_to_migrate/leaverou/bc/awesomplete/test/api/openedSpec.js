<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

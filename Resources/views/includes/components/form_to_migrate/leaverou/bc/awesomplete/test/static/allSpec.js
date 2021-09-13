<<<<<<< HEAD
describe("Awesomplete.all", function () {

	$.fixture("options");

	subject(function () { return Awesomplete.all });

	it("is empty initially", function () {
		expect(this.subject.length).toBe(0);
	});

	it("keeps a list of created instances", function () {
		var first = new Awesomplete("#with-data-list-inline");
		expect(this.subject.length).toBe(1);
		expect(this.subject).toContain(first);

		var second = new Awesomplete("#with-data-list");
		expect(this.subject.length).toBe(2);
		expect(this.subject).toContain(first);
		expect(this.subject).toContain(second);
	});
});
=======
describe("Awesomplete.all", function () {

	$.fixture("options");

	subject(function () { return Awesomplete.all });

	it("is empty initially", function () {
		expect(this.subject.length).toBe(0);
	});

	it("keeps a list of created instances", function () {
		var first = new Awesomplete("#with-data-list-inline");
		expect(this.subject.length).toBe(1);
		expect(this.subject).toContain(first);

		var second = new Awesomplete("#with-data-list");
		expect(this.subject.length).toBe(2);
		expect(this.subject).toContain(first);
		expect(this.subject).toContain(second);
	});
});
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

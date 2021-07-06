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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

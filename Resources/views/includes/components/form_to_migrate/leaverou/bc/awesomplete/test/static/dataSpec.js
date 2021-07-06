<<<<<<< HEAD
describe("Awesomplete.DATA", function () {

	subject(function () { return Awesomplete.DATA(this.item) });

	it("returns original String", function () {
		this.item = "JavaScript";
		expect(this.subject).toEqual("JavaScript");
	});

	it("returns original Object", function () {
		this.item = { label: "JavaScript", value: "JS" };
		expect(this.subject).toEqual({ label: "JavaScript", value: "JS" });
	});

	it("returns original Array", function () {
		this.item = [ "JavaScript", "JS" ];
		expect(this.subject).toEqual([ "JavaScript", "JS" ]);
	});
});
=======
describe("Awesomplete.DATA", function () {

	subject(function () { return Awesomplete.DATA(this.item) });

	it("returns original String", function () {
		this.item = "JavaScript";
		expect(this.subject).toEqual("JavaScript");
	});

	it("returns original Object", function () {
		this.item = { label: "JavaScript", value: "JS" };
		expect(this.subject).toEqual({ label: "JavaScript", value: "JS" });
	});

	it("returns original Array", function () {
		this.item = [ "JavaScript", "JS" ];
		expect(this.subject).toEqual([ "JavaScript", "JS" ]);
	});
});
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
describe("Awesomplete.REPLACE", function () {

	subject(function () { return Awesomplete.REPLACE });

	def("instance", function() { return { input: { value: "initial" } } });

	it("replaces input value", function () {
		this.subject.call(this.instance, { value: "JavaScript" });
		expect(this.instance.input.value).toBe("JavaScript");
	});
});
=======
describe("Awesomplete.REPLACE", function () {

	subject(function () { return Awesomplete.REPLACE });

	def("instance", function() { return { input: { value: "initial" } } });

	it("replaces input value", function () {
		this.subject.call(this.instance, { value: "JavaScript" });
		expect(this.instance.input.value).toBe("JavaScript");
	});
});
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
describe("Awesomplete.REPLACE", function () {

	subject(function () { return Awesomplete.REPLACE });

	def("instance", function() { return { input: { value: "initial" } } });

	it("replaces input value", function () {
		this.subject.call(this.instance, { value: "JavaScript" });
		expect(this.instance.input.value).toBe("JavaScript");
	});
});
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea

<<<<<<< HEAD
describe("click event", function () {

	$.fixture("plain");

	subject(function () {
		return new Awesomplete("#plain", { list: ["item1", "item2", "item3"] });
	});

	def("li", function () { return this.subject.ul.children[1] });

	beforeEach(function () {
		$.type(this.subject.input, "ite");
		spyOn(this.subject, "select");
	});

	describe("with ul target", function () {
		def("target", function () { return this.subject.ul });

		it("does not select item", function () {
			$.fire(this.target, "click", { button: 0 });
			expect(this.subject.select).not.toHaveBeenCalled();
		});
	});

	describe("with li target", function () {
		def("target", function () { return this.li });

		describe("on left click", function () {
			it("selects item", function () {
				var event = $.fire(this.target, "click", { button: 0 });
				expect(this.subject.select).toHaveBeenCalledWith(this.li, this.target);
			});
		});

		describe("on right click", function () {
			it("does not select item", function () {
				$.fire(this.target, "click", { button: 2 });
				expect(this.subject.select).not.toHaveBeenCalled();
			});
		});
	});

	describe("with child of li target", function () {
		def("target", function () { return $("mark", this.li) });

		describe("on left click", function () {
			it("selects item", function () {
				var event = $.fire(this.target, "click", { button: 0 });
				expect(this.subject.select).toHaveBeenCalledWith(this.li, this.target);
				expect(event.defaultPrevented).toBe(true);
			});
		});

		describe("on right click", function () {
			it("does not select item", function () {
				$.fire(this.target, "click", { button: 2 });
				expect(this.subject.select).not.toHaveBeenCalled();
			});
		});
	});
});
=======
describe("click event", function () {

	$.fixture("plain");

	subject(function () {
		return new Awesomplete("#plain", { list: ["item1", "item2", "item3"] });
	});

	def("li", function () { return this.subject.ul.children[1] });

	beforeEach(function () {
		$.type(this.subject.input, "ite");
		spyOn(this.subject, "select");
	});

	describe("with ul target", function () {
		def("target", function () { return this.subject.ul });

		it("does not select item", function () {
			$.fire(this.target, "click", { button: 0 });
			expect(this.subject.select).not.toHaveBeenCalled();
		});
	});

	describe("with li target", function () {
		def("target", function () { return this.li });

		describe("on left click", function () {
			it("selects item", function () {
				var event = $.fire(this.target, "click", { button: 0 });
				expect(this.subject.select).toHaveBeenCalledWith(this.li, this.target);
			});
		});

		describe("on right click", function () {
			it("does not select item", function () {
				$.fire(this.target, "click", { button: 2 });
				expect(this.subject.select).not.toHaveBeenCalled();
			});
		});
	});

	describe("with child of li target", function () {
		def("target", function () { return $("mark", this.li) });

		describe("on left click", function () {
			it("selects item", function () {
				var event = $.fire(this.target, "click", { button: 0 });
				expect(this.subject.select).toHaveBeenCalledWith(this.li, this.target);
				expect(event.defaultPrevented).toBe(true);
			});
		});

		describe("on right click", function () {
			it("does not select item", function () {
				$.fire(this.target, "click", { button: 2 });
				expect(this.subject.select).not.toHaveBeenCalled();
			});
		});
	});
});
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

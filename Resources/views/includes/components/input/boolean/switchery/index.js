var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
console.log("Hello world!");
elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
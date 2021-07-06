<<<<<<< HEAD
(function() {

  var strings = {
    slicehost: [
      'Slicehost Forum - nginx default virtual host',
      'Slicehost Forum - All Discussions',
      'Slicehost Forum - Running Main &amp; Backup Web Server'
    ]
  };

  JSLitmus.test('match first char', function() {
    LiquidMetal.score(strings.slicehost[0], 's');
    LiquidMetal.score(strings.slicehost[1], 's');
    LiquidMetal.score(strings.slicehost[2], 's');
  });

  JSLitmus.test('match first 4 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'slic');
    LiquidMetal.score(strings.slicehost[1], 'slic');
    LiquidMetal.score(strings.slicehost[2], 'slic');
  });

  JSLitmus.test('miss 1 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'z');
    LiquidMetal.score(strings.slicehost[1], 'z');
    LiquidMetal.score(strings.slicehost[2], 'z');
  });

  JSLitmus.test('miss 4 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'sliz');
    LiquidMetal.score(strings.slicehost[1], 'sliz');
    LiquidMetal.score(strings.slicehost[2], 'sliz');
  });

  JSLitmus.test('match middle 1 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'x');
    LiquidMetal.score(strings.slicehost[1], 'd');
    LiquidMetal.score(strings.slicehost[2], 'a');
  });

  JSLitmus.test('match middle 4 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'ngin');
    LiquidMetal.score(strings.slicehost[1], 'defa');
    LiquidMetal.score(strings.slicehost[2], 'main');
  });

=======
(function() {

  var strings = {
    slicehost: [
      'Slicehost Forum - nginx default virtual host',
      'Slicehost Forum - All Discussions',
      'Slicehost Forum - Running Main &amp; Backup Web Server'
    ]
  };

  JSLitmus.test('match first char', function() {
    LiquidMetal.score(strings.slicehost[0], 's');
    LiquidMetal.score(strings.slicehost[1], 's');
    LiquidMetal.score(strings.slicehost[2], 's');
  });

  JSLitmus.test('match first 4 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'slic');
    LiquidMetal.score(strings.slicehost[1], 'slic');
    LiquidMetal.score(strings.slicehost[2], 'slic');
  });

  JSLitmus.test('miss 1 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'z');
    LiquidMetal.score(strings.slicehost[1], 'z');
    LiquidMetal.score(strings.slicehost[2], 'z');
  });

  JSLitmus.test('miss 4 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'sliz');
    LiquidMetal.score(strings.slicehost[1], 'sliz');
    LiquidMetal.score(strings.slicehost[2], 'sliz');
  });

  JSLitmus.test('match middle 1 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'x');
    LiquidMetal.score(strings.slicehost[1], 'd');
    LiquidMetal.score(strings.slicehost[2], 'a');
  });

  JSLitmus.test('match middle 4 char', function() {
    LiquidMetal.score(strings.slicehost[0], 'ngin');
    LiquidMetal.score(strings.slicehost[1], 'defa');
    LiquidMetal.score(strings.slicehost[2], 'main');
  });

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
})();
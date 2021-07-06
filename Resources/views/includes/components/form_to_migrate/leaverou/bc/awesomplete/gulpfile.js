<<<<<<< HEAD
var gulp = require('gulp');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var header = require('gulp-header');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

var banner = "// Awesomplete - Lea Verou - MIT license\n";

gulp.task('minify', function() {
	return gulp.src(['awesomplete.js'])
		.pipe(sourcemaps.init())
		.pipe(uglify())
		.pipe(rename({ suffix: '.min' }))
		.pipe(header(banner))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('.'));
});

gulp.task('concat', function() {

	return gulp.src(['awesomplete.base.css', 'awesomplete.theme.css'])
		.pipe(sourcemaps.init())
		.pipe(concat('awesomplete.css'))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('.'));


});

gulp.task('default', ['minify', 'concat']);
=======
var gulp = require('gulp');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var header = require('gulp-header');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

var banner = "// Awesomplete - Lea Verou - MIT license\n";

gulp.task('minify', function() {
	return gulp.src(['awesomplete.js'])
		.pipe(sourcemaps.init())
		.pipe(uglify())
		.pipe(rename({ suffix: '.min' }))
		.pipe(header(banner))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('.'));
});

gulp.task('concat', function() {

	return gulp.src(['awesomplete.base.css', 'awesomplete.theme.css'])
		.pipe(sourcemaps.init())
		.pipe(concat('awesomplete.css'))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('.'));


});

gulp.task('default', ['minify', 'concat']);
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

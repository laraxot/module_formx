<<<<<<< HEAD
<<<<<<< HEAD
let mix = require('laravel-mix')

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

mix.js('resources/js/field.js', 'dist/js')
   .sass('resources/sass/field.scss', 'dist/css')
    .webpackConfig({
        resolve: {
            symlinks: false
        }
=======
let mix = require('laravel-mix')

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

mix.js('resources/js/field.js', 'dist/js')
   .sass('resources/sass/field.scss', 'dist/css')
    .webpackConfig({
        resolve: {
            symlinks: false
        }
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
let mix = require('laravel-mix')

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

mix.js('resources/js/field.js', 'dist/js')
   .sass('resources/sass/field.scss', 'dist/css')
    .webpackConfig({
        resolve: {
            symlinks: false
        }
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
    })
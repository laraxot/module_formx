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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
    })
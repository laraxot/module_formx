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
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
    })
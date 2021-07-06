<<<<<<< HEAD
const mix = require('laravel-mix');
//require('laravel-mix-merge-manifest');

//mix.setPublicPath('../../../public_html').mergeManifest();

var src=__dirname + '/Resources/assets';
var dest=__dirname + '/Resources/views/dist';

mix.js(src+'/js/app.js', dest+'/js')
    .sass( src+'/sass/app.scss', dest+'/css');

if (mix.inProduction()) {
    mix.version();
}


=======
const mix = require('laravel-mix');
//require('laravel-mix-merge-manifest');

//mix.setPublicPath('../../../public_html').mergeManifest();

var src=__dirname + '/Resources/assets';
var dest=__dirname + '/Resources/views/dist';

mix.js(src+'/js/app.js', dest+'/js')
    .sass( src+'/sass/app.scss', dest+'/css');

if (mix.inProduction()) {
    mix.version();
}


>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

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


>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291

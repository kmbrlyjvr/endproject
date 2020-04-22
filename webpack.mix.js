const mix = require('laravel-mix');
            /*require('laravel-mix-svg');*/
            require('laravel-mix-scrollmagic-gsap');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */



mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .setResourceRoot('sinta/public')
   .scrollmagicGSAP('public/js')
   .extract(['vue', 'axios'])
   .sourceMaps();


/*mix.copy('resources/svgs', 'public/svgs/');*/


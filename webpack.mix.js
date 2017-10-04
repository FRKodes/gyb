let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.sass', 'public/css')
   .combine(
   		[
   		'public/css/icons-font.css',
   		'public/css/bootstrap.min.css',
   		'public/css/app.css'
   		], 'public/css/all.css');
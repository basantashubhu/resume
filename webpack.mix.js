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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
   
mix.js('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js');

mix.scripts([
	'resources/assets/custom/globalAjax.js',
	'resources/assets/custom/js/table-responsive.js',
	'resources/assets/custom/js/crud.js'
	], 'public/js/mixed.js');
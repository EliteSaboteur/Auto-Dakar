const mix = require('laravel-mix');

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

 // copy fonts to public
mix.copyDirectory('resources/fonts', 'public/fonts');

mix.copyDirectory('resources/js/datetimepicker.min.js', 'public/js');
mix.copyDirectory('resources/js/moment.js', 'public/js');
mix.copyDirectory('resources/js/bootstrap-select.js', 'public/js');
mix.copyDirectory('resources/js/scss.js', 'public/js');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/custom.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/views/pdf/invoice.scss', '../resources/views/pdf/style.css');

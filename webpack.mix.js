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

mix.js('resources/js/rubick.js', 'public/js/custom.js')
    .styles([
        'resources/sass/rubick.css',
        'resources/sass/fonts/pe-icon-7-stroke.css',
        'resources/sass/fonts/Rubik-Fonts.css'
    ], 'public/css/custom.css')
    .styles('resources/sass/bootstrap.css', 'public/css/bootstrap.css')

const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.
        styles([
            'resources/css/bootstrap.css',
            'resources/css/fonts.css',
            'resources/css/style.css'
            ],'public/css/style.css')

    .scripts(
            [
            'resources/js/bootstrap.js',
            'resources/js/core.min.js',
            'resources/js/script.js',
            'resources/js/3ts2ksMwXvKRuG480KNifJ2_JNM.js'


            ],'public/js/scripts.js')
    .version();

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

mix.js('resources/js/app.js', 'public/js').vue({ version: 2 })
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.styles(['public/css/bootstrap.min.css',
    'public/css/common.css',
    'public/css/main.css',
    'public/css/owl.carousel.min.css',
    'public/css/responsive.css',
    ], 'public/css/all.css').version();

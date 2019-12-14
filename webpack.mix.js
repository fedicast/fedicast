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

// webpack.mix.js
mix.webpackConfig({
    module: {
        rules: [
            {
                // Matches all PHP or JSON files in `resources/lang` directory.
                test: /resources[\\\/]lang.+\.(php|json)$/,
                loader: 'laravel-localization-loader',
            }
        ]
    }
});

mix
    .js('resources/js/bootstrap.js', 'public/js/common.js')
    .js('resources/js/app/main.js', 'public/js/app.js')
    .js('resources/js/search/main.js', 'public/js/search.js')
    .sass('resources/sass/app.scss', 'public/css');

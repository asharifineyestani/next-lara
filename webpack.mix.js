const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');

mix.webpackConfig({
    plugins: [
        new CopyWebpackPlugin([
            {
                from: 'resources/assets/images',
                to: 'assets/images', // Laravel mix will place this in 'public/img'
            },
            // {
            //     from: 'resources/uploads',
            //     to: 'uploads', // Laravel mix will place this in 'public/img'
            // }
        ]),
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: 80,
                })
            ]
        })
    ]
});

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

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css')
    .sass('resources/assets/scss/style.scss', 'public/assets/css/app.css')
    .styles([
        'public/assets/css/app.css',
        'resources/sass/bootstrap-grid.min.css',
        'resources/others/style.css',
    ], 'public/assets/css/app.css');
;


mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/plugins.js',
    'resources/js/app.js',
], 'public/assets/js/app.js');


mix.copy('resources/assets/fonts/', 'public/assets/fonts');
mix.copy('resources/others/fonts',  'public/assets/fonts');



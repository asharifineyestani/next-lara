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
    .sass('resources/assets/scss/style.scss', 'public/assets/css')
    // .styles([
    //     'resources/assets/css/icons.min.css',
    //     'resources/assets/css/bootstrap.min.css',
    //     'resources/assets/css/plugins.min.css',
    //     'resources/assets/css/colors.css',
    //     'resources/assets/css/styles.css',
    // ], 'public/assets/css/app.css');
;


// mix.scripts([
//     'public/assets/js/app.js',
//     'resources/assets/js/jquery.min.j',
//     'resources/assets/js/bootstrap.min.j',
//     'resources/assets/js/plugins.min.j',
//     'resources/assets/js/main-scripts.j',
// ], 'public/assets/js/app.js');


mix.copy('resources/assets/fonts/', 'public/assets/fonts');




const mix = require('laravel-mix');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminWebpWebpackPlugin = require('imagemin-webp-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
    .react()
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig({
        plugins: [
            new CopyWebpackPlugin({
                patterns: [{
                    from: 'resources/images',
                    to: 'images'
                }]
            }),
            new ImageminWebpWebpackPlugin({
                detailedLogs: true,
                overrideExtension: true
            })
        ]
    });

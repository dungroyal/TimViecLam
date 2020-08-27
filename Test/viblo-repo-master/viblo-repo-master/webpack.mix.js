let mix = require('laravel-mix');
var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');
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
    .sass('resources/assets/sass/app.scss', 'public/css')
    .webpackConfig({
        plugins: [
            new SWPrecacheWebpackPlugin({
                cacheId: 'pwa',
                filename: 'service-worker.js',
                staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
                minify: true,
                stripPrefix: 'public/',
                maximumFileSizeToCacheInBytes: 10097152,
                handleFetch: true,
                dynamicUrlToDependencies: { //you should add the path to your blade files here so they can be cached
                    //and have full support for offline first (example below)
                    '/': ['resources/views/welcome.blade.php'],
                    // '/posts': ['resources/views/posts.blade.php']
                },
                staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
                navigateFallback: '/',
                runtimeCaching: [{
                        urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
                        handler: 'cacheFirst'
                    },
                    {
                        urlPattern: /^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/,
                        handler: 'cacheFirst'
                    }
                ],
                // importScripts: ['./js/push_message.js']
            })
        ]
    });
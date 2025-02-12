const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
require('laravel-mix-image-multisizer')
require('laravel-mix-webp-watched');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

var fs = require('fs');
var dir = './build_images/thumbnails';

if (!fs.existsSync(dir)){
    fs.mkdirSync(dir, { recursive: true });
}

mix
    .jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
    .version()
    .imgs({
        source: 'source/assets/images/posts',
        destination: 'build_images/thumbnails',
        thumbnailsSizes: [450, 800, 1500],
        thumbnailsSuffix: '@',
        thumbnailsOnly: true
    })
    .webpWatched('build_images/thumbnails', 'build_images/thumbnails', {
        imageminWebpOptions: {
        quality: 50,
        }
    })
;

const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
require('laravel-mix-image-multisizer')
require('laravel-mix-webp-watched');
require('laravel-mix-compress');
const zlib = require("zlib");

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
.compress({
    'include': ['./build_images/thumbnails'],
    'filename': "[path][base].br",
    'algorithm': "brotliCompress",
    'test': /\.(js|css|html|svg|png|webp)$/,
    'compressionOptions': {
        'params': {
            [zlib.constants.BROTLI_PARAM_QUALITY]: 11,
        },
    },
    'threshold': 10240,
    'minRatio': 0.8,
    'deleteOriginalAssets': false,
});


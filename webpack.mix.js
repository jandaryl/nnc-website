const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.postCss('resources/css/tailwind.css', 'public/css',
    [
        tailwindcss('./tailwind.js'),
    ])
    .sass('resources/sass/bulma.scss', 'public/css')
    .copy('node_modules/bulma-extensions/bulma-carousel/dist/css/bulma-carousel.min.css', 'public/css/bulma-carousel.min.css')
    .copy('node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.min.js', 'public/js/bulma-carousel.min.js')
    .browserSync('nnc-website.local');

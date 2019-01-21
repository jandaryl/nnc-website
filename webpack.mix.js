const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.postCss('resources/css/tailwind.css', 'public/css',
    [
        tailwindcss('./tailwind.js'),
    ])
    .sass('resources/sass/bulma.scss', 'public/css')
    .copy('node_modules/bulma-extensions/bulma-carousel/dist/css/bulma-carousel.min.css', 'public/css/bulma-carousel.min.css')
    .copy('node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.min.js', 'public/js/bulma-carousel.min.js')
    .copy('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/css/fontawesome.min.css')
    .copy('node_modules/@fortawesome/fontawesome-free/js/all.min.js', 'public/js/fontawesome.min.js')
    .browserSync('nnc-website.local');

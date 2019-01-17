const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.postCss('resources/css/tailwind.css', 'public/css',
    [
        tailwindcss('./tailwind.js'),
    ])
    .sass('resources/sass/bulma.scss', 'public/css')
    .browserSync('nnc-website.local');

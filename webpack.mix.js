const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .react('resources/js/views/landing.jsx', 'public/js/views') // Kompilasi file landing.jsx
   .react('resources/js/components/navbar.jsx', 'public/js/components') // Kompilasi file navbar.jsx
   .react('resources/js/components/footer.jsx', 'public/js/components') // Kompilasi file footer.jsx
   .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer')
   ]);

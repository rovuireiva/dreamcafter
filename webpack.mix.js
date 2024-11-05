const mix = require('laravel-mix');

// Mengompilasi file JavaScript
mix.js('resources/js/app.js', 'public/js')
   // Mengompilasi file SASS
   .sass('resources/sass/app.scss', 'public/css')
   // Mengompilasi file CSS biasa
   .css('resources/css/style.css', 'public/css')
   // Menyalin gambar dari folder resources ke folder publik
   .copy('resources/images', 'public/images')
   // Mengaktifkan versioning untuk cache busting
   .version();

// webpack.mix.js
let mix = require('laravel-mix');

require('mix-tailwindcss');

mix.sass('assets/css/style.scss', 'style.css')
  .tailwind('tailwind.config.js');

mix.combine(['assets/js/gsap-animation.js', 'assets/js/menu.js', 'assets/js/swiper.js'] , 'main.js')
  .minify('main.js');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});
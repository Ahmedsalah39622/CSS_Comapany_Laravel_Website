import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/assets/vendor/libs/swiper/swiper.scss',
        'resources/assets/vendor/libs/nouislider/nouislider.scss',
        'resources/assets/vendor/scss/pages/front-page-landing.scss',
        'resources/assets/vendor/scss/pages/front-page-mobile.scss'
      ],
      refresh: true
    }),
    vue()
  ],
  css: {
    preprocessorOptions: {
      scss: {
        includePaths: ['public/assets/vendor/scss', 'resources/assets/vendor/scss']
      }
    }
  }
});

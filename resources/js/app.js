import './bootstrap';
import { createApp } from 'vue';
import HeroSwitcher from './components/HeroSwitcher.vue';

/*
  Add custom scripts here
*/
import.meta.glob([
  '../assets/img/**',
  // '../assets/json/**',
  '../assets/vendor/fonts/**'
]);

const app = createApp({});
app.component('hero-switcher', HeroSwitcher);
app.mount('#app');

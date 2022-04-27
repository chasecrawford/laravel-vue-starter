import { createApp } from 'vue'
import App from './components/App.vue';
import Homepage from './components/Homepage.vue';

const app = createApp({});

app.component('app', App)
    .component('homepage', Homepage)
    .mount('#app');

require('./bootstrap');

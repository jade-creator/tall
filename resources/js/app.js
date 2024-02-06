import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';

import DogsListComponent from './components/DogsListComponent.vue';

const app = createApp({});

app.component('dogs-list-component', DogsListComponent);

app.mount("#app");

import { createApp } from 'vue';
import { createRouter, createWebHashHistory } from 'vue-router';
import './style.css';
import App from './App.vue';

import Layout from '@/components/Layout.vue';
import AdminLayout from '@/components/AdminLayout.vue';

import { routes } from './routes.js';

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

const app = createApp(App);
app.component('Layout', Layout);
app.component('AdminLayout', AdminLayout);
app.use(router);
app.mount('#app');

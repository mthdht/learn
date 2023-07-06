import { createApp } from 'vue';
import { createRouter, createWebHashHistory } from 'vue-router';
import './style.css';
import App from './App.vue';

import Dashboard from './components/Dashboard.vue';
import Home from './components/Home.vue';
import Profile from './components/Profile.vue';
import UserLessons from './components/UserLessons.vue';
import UserBookmarks from './components/UserBookmarks.vue';
import Settings from './components/Settings.vue';

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: Home, name: 'home' },
  { path: '/:user/dashboard', component: Dashboard, name: 'user.dashboard' },
  { path: '/:user/profile', component: Profile, name: 'user.profile' },
  { path: '/:user/lessons', component: UserLessons, name: 'user.lessons' },
  {
    path: '/:user/bookmarks',
    component: UserBookmarks,
    name: 'user.bookmarks',
  },
  { path: '/:user/settings', component: Settings, name: 'user.settings' },
];

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: createWebHashHistory(),
  routes, // short for `routes: routes`
});

createApp(App).use(router).mount('#app');

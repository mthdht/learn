import Dashboard from './components/Dashboard.vue';
import Home from './components/Home.vue';
import Profile from './components/Profile.vue';
import UserLessons from './components/UserLessons.vue';
import UserBookmarks from './components/UserBookmarks.vue';
import Settings from './components/Settings.vue';

export const routes = [
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
  { path: '/lessons', component: Settings, name: 'lessons.index' },
  { path: '/lessons/:lesson', component: Settings, name: 'lessons.show' },
  { path: '/lessons/:lesson/edit', component: Settings, name: 'lessons.edit' },
  {
    path: '/lessons/:lesson/create',
    component: Settings,
    name: 'lessons.create',
  },
];

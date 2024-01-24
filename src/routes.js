import Dashboard from './pages/Dashboard.vue';
import Home from './pages/Home.vue';
import Profile from './pages/Profile.vue';
import UserLessons from './pages/UserLessons.vue';
import UserBookmarks from './pages/UserBookmarks.vue';
import Settings from './pages/Settings.vue';
import Lessons from './pages/Lessons.vue';
import Lesson from './pages/Lesson.vue';

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
  { path: '/lessons', component: Lessons, name: 'lessons.index' },
  { path: '/lessons/:lesson', component: Lesson, name: 'lessons.show' },
  { path: '/lessons/:lesson/edit', component: Settings, name: 'lessons.edit' },
  {
    path: '/lessons/:lesson/create',
    component: Settings,
    name: 'lessons.create',
  },
];

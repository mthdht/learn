import Dashboard from './pages/users/Dashboard.vue';
import Home from './pages/Home.vue';
import Profile from './pages/users/Profile.vue';
import UserLessons from './pages/users/Lessons.vue';
import UserLesson from './pages/users/Lesson.vue';
import UserBookmarks from './pages/users/Bookmarks.vue';
import Settings from './pages/users/Settings.vue';
import Lessons from './pages/lessons/Index.vue';
import Lesson from './pages/lessons/Show.vue';

export const routes = [
  { path: '/', component: Home, name: 'home' },
  { path: '/:user/dashboard', component: Dashboard, name: 'user.dashboard' },
  { path: '/:user/profile', component: Profile, name: 'user.profile' },
  { path: '/:user/lessons', component: UserLessons, name: 'user.lessons' },
  {
    path: '/:user/lessons/:lesson',
    component: UserLesson,
    name: 'user.lesson',
  },
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

<template>
  <aside
    class="
      w-48
      shrink-0
      bg-sky-900
      text-slate-200
      font-semibold
      pt-4
      fixed
      bottom-0
    "
  >
    <nav>
      <ul>
        <li>
          <router-link
            :to="{ name: 'user.dashboard', params: { user: 'mthdht' } }"
            class="p-2 flex gap-4 items-center hover:text-white"
          >
            <HomeIcon class="w-7 h-7"></HomeIcon>
            <span>Dashboard</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.profile', params: { user: 'mthdht' } }"
            class="p-2 flex gap-4 items-center hover:text-white"
          >
            <UserIcon class="size-6"></UserIcon>
            <span>Profile</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.lessons.index', params: { user: 'mthdht' } }"
            class="p-2 flex gap-4 items-center hover:text-white"
          >
            <AcademicCapIcon class="w-7 h-7"></AcademicCapIcon>
            <span>Leçons</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.bookmarks', params: { user: 'mthdht' } }"
            class="p-2 flex gap-4 items-center hover:text-white"
          >
            <BookmarkSquareIcon class="w-7 h-7"></BookmarkSquareIcon>
            <span>Marques pages</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.settings', params: { user: 'mthdht' } }"
            class="p-2 flex gap-4 items-center hover:text-white"
          >
            <Cog6ToothIcon class="w-7 h-7"></Cog6ToothIcon>
            <span>Règlages</span>
          </router-link>
        </li>
      </ul>
    </nav>
  </aside>
</template>

<script setup>
import {
  HomeIcon,
  UserIcon,
  Cog6ToothIcon,
  AcademicCapIcon,
  BookmarkSquareIcon,
} from '@heroicons/vue/24/outline';
</script>

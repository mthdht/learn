<template>
  <aside
    class="
      shrink-0
      bg-sky-900
      text-slate-200
      font-semibold
      w-18
      pt-8
      fixed
      bottom-0
      top-14
    "
  >
    <nav>
      <ul class="flex flex-col gap-2 items-center">
        <li>
          <router-link
            :to="{ name: 'user.dashboard', params: { user: 'mthdht' } }"
            class="p-3 flex hover:text-white bg-sky-800 text-white rounded"
          >
            <HomeIcon class="w-6 h-6"></HomeIcon>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.profile', params: { user: 'mthdht' } }"
            class="
              p-3
              flex
              hover:text-white hover:bg-sky-800
              rounded
              text-slate-300
            "
          >
            <UserIcon class="w-6 h-6"></UserIcon>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.lessons', params: { user: 'mthdht' } }"
            class="
              p-3
              flex
              hover:text-white hover:bg-sky-800
              rounded
              text-slate-300
            "
          >
            <AcademicCapIcon class="w-6 h-6"></AcademicCapIcon>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.bookmarks', params: { user: 'mthdht' } }"
            class="
              p-3
              flex
              hover:text-white hover:bg-sky-800
              rounded
              text-slate-300
            "
          >
            <BookmarkSquareIcon class="w67 h-6"></BookmarkSquareIcon>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.settings', params: { user: 'mthdht' } }"
            class="
              p-3
              flex
              hover:text-white hover:bg-sky-800
              rounded
              text-slate-300
            "
          >
            <Cog6ToothIcon class="w-6 h-6"></Cog6ToothIcon>
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

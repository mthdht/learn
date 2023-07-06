<template>
  <aside class="w-48 shrink-0 bg-red-50 font-semibold">
    <nav>
      <ul>
        <li>
          <router-link
            :to="{ name: 'user.dashboard', params: { user: 'mthdht' } }"
            class="p-2 border border flex gap-4 items-center"
          >
            <HomeIcon class="w-7 h-7"></HomeIcon>
            <span>Dashboard</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.profile', params: { user: 'mthdht' } }"
            class="p-2 border border flex gap-4 items-center"
          >
            <UserIcon class="w-7 h-7"></UserIcon>
            <span>Profile</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.lessons', params: { user: 'mthdht' } }"
            class="p-2 border border flex gap-4 items-center"
          >
            <AcademicCapIcon class="w-7 h-7"></AcademicCapIcon>
            <span>Leçons</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.bookmarks', params: { user: 'mthdht' } }"
            class="p-2 border border flex gap-4 items-center"
          >
            <BookmarkSquareIcon class="w-7 h-7"></BookmarkSquareIcon>
            <span>Marques pages</span>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.settings', params: { user: 'mthdht' } }"
            class="p-2 border border flex gap-4 items-center"
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
import { HomeIcon } from '@heroicons/vue/24/outline';
import { UserIcon } from '@heroicons/vue/24/outline';
import { Cog6ToothIcon } from '@heroicons/vue/24/outline';
import { AcademicCapIcon } from '@heroicons/vue/24/outline';
import { BookmarkSquareIcon } from '@heroicons/vue/24/outline';
</script>

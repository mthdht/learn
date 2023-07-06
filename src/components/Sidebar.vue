<template>
  <aside class="w-48 shrink-0 bg-red-50 font-semibold">
    <nav>
      <ul>
        <li class="p-2 border border flex gap-4 items-center">
          <HomeIcon class="w-7 h-7"></HomeIcon>
          <span>Dashboard</span>
        </li>
        <li class="p-2 border border flex gap-4 items-center">
          <UserIcon class="w-7 h-7"></UserIcon>
          <span>Profile</span>
        </li>
        <li class="p-2 border border flex gap-4 items-center">
          <AcademicCapIcon class="w-7 h-7"></AcademicCapIcon>
          <span>Leçons</span>
        </li>
        <li class="p-2 border border flex gap-4 items-center">
          <BookmarkSquareIcon class="w-7 h-7"></BookmarkSquareIcon>
          <span>Marques pages</span>
        </li>
        <li class="p-2 border border flex gap-4 items-center">
          <Cog6ToothIcon class="w-7 h-7"></Cog6ToothIcon>
          <span>Règlages</span>
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

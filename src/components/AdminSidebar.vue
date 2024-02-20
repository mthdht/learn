<template>
  <aside
    class="
      shrink-0
      bg-cyan-900
      text-slate-300
      font-semibold
      w-18
      pt-8
      p-3
      relative
      transition-[width]
      duration-1000
    "
    :class="{ 'w-64': isOpen }"
  >
    <nav>
      <ul class="flex flex-col gap-2">
        <li>
          <SidebarLink
            :to="{ name: 'user.dashboard', params: { user: 'mthdht' } }"
            label="Dashboard"
            :open="isOpen"
            active
          >
            <HomeIcon class="w-6 h-6 stroke-2"></HomeIcon>
          </SidebarLink>
        </li>
        <li>
          <SidebarLink
            :to="{ name: 'user.profile', params: { user: 'mthdht' } }"
            label="Profile"
            :open="isOpen"
          >
            <UserIcon class="w-6 h-6 stroke-2"></UserIcon>
          </SidebarLink>
        </li>
        <li>
          <SidebarLink
            :to="{ name: 'user.lessons', params: { user: 'mthdht' } }"
            label="My lessons"
            :open="isOpen"
          >
            <AcademicCapIcon class="w-6 h-6 stroke-2"></AcademicCapIcon>
          </SidebarLink>
        </li>
        <li>
          <SidebarLink
            :to="{ name: 'user.bookmarks', params: { user: 'mthdht' } }"
            label="bookmarks"
            :open="isOpen"
          >
            <BookmarkSquareIcon class="w-6 h-6 stroke-2"></BookmarkSquareIcon>
          </SidebarLink>
        </li>
        <li>
          <SidebarLink
            :to="{ name: 'user.settings', params: { user: 'mthdht' } }"
            label="Settings"
            :open="isOpen"
          >
            <Cog6ToothIcon class="w-6 h-6 stroke-2"></Cog6ToothIcon>
          </SidebarLink>
        </li>
      </ul>
      <button
        class="
          p-3
          flex
          hover:text-white hover:bg-cyan-700
          bg-cyan-800
          rounded
          absolute
          bottom-12
          left-3
        "
        @click="isOpen = !isOpen"
      >
        <transition name="quickFade" mode="out-in">
          <component
            :is="isOpen ? ChevronLeftIcon : ChevronRightIcon"
            class="h-6 w-6 stroke-3"
          ></component>
        </transition>
      </button>
    </nav>
  </aside>
</template>

<script setup>
import { ref } from 'vue';
import {
  HomeIcon,
  UserIcon,
  Cog6ToothIcon,
  AcademicCapIcon,
  BookmarkSquareIcon,
  ChevronRightIcon,
  ChevronLeftIcon,
} from '@heroicons/vue/24/outline';

import SidebarLink from '@/components/SidebarLink.vue';

const isOpen = ref(false);
</script>

<style scoped>
.fade-enter-active {
  transition: opacity 0.5s ease 0.5s;
}
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

.quickFade-enter-active,
.quickFade-leave-active {
  transition: opacity 0.5s ease;
}

.quickFade-enter-from,
.quickFade-leave-to {
  opacity: 0;
}
</style>

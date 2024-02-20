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
          <router-link
            :to="{ name: 'user.dashboard', params: { user: 'mthdht' } }"
            class="
              p-3
              flex
              gap-4
              hover:text-white
              bg-cyan-800
              text-white
              rounded
            "
          >
            <HomeIcon class="w-6 h-6 stroke-2"></HomeIcon>

            <transition name="fade">
              <span v-show="isOpen">Dashboard</span>
            </transition>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.profile', params: { user: 'mthdht' } }"
            class="p-3 flex gap-4 hover:text-white hover:bg-cyan-800 rounded"
          >
            <UserIcon class="w-6 h-6 stroke-2"></UserIcon>
            <transition name="fade">
              <span v-show="isOpen">Profile</span>
            </transition>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.lessons', params: { user: 'mthdht' } }"
            class="p-3 flex gap-4 hover:text-white hover:bg-cyan-800 rounded"
          >
            <AcademicCapIcon class="w-6 h-6 stroke-2"></AcademicCapIcon>
            <transition name="fade">
              <span v-show="isOpen">My lessons</span>
            </transition>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.bookmarks', params: { user: 'mthdht' } }"
            class="p-3 flex gap-4 hover:text-white hover:bg-cyan-800 rounded"
          >
            <BookmarkSquareIcon class="w-6 h-6 stroke-2"></BookmarkSquareIcon>
            <transition name="fade">
              <span v-show="isOpen">Bookmarks</span>
            </transition>
          </router-link>
        </li>
        <li>
          <router-link
            :to="{ name: 'user.settings', params: { user: 'mthdht' } }"
            class="p-3 flex gap-4 hover:text-white hover:bg-cyan-800 rounded"
          >
            <Cog6ToothIcon class="w-6 h-6 stroke-2"></Cog6ToothIcon>
            <transition name="fade">
              <span v-show="isOpen">Settings</span>
            </transition>
          </router-link>
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

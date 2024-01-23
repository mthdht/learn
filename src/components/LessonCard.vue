<template>
  <router-link to="">
    <div
      class="
        l-lesson-card
        rounded
        overflow-hidden
        shadow
        hover:scale-102
        transition-transform
        flex
      "
      :class="layout"
    >
      <div class="l-lesson-card-image aspect-video bg-sky-600" :class="size">
        <img :src="props.img" :alt="props.alt" />
      </div>
      <div class="l-lesson-card-content bg-slate-50 p-4 grow">
        <h4 class="uppercase text-sky-800 font-light tracking-tight">
          Some Categories
        </h4>
        <p class="text-slate-700 font-semibold mt-1">The title of the lesson</p>
        <div class="infos flex gap-4 justify-end mt-4">
          <div class="flex gap-2 items-center">
            <ClockIcon class="h-5 w-5"></ClockIcon>
            <span>{{ readTime }}</span>
          </div>
          <div class="flex gap-2 items-center">
            <ChartBarIcon class="h-5 w-5"></ChartBarIcon>
            <span>{{ props.level }}</span>
          </div>
        </div>
      </div>
    </div>
  </router-link>
</template>

<script setup>
import { computed } from 'vue';
import { ClockIcon, ChartBarIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
  layout: {
    type: String,
    default: 'vertical',
    validator(value) {
      return ['vertical', 'horizontal'].includes(value);
    },
  },
  img: String,
  alt: String,
  level: {
    type: String,
    default: 'easy',
    validator(value) {
      return ['easy', 'intermediate', 'difficult', 'expert'].includes(value);
    },
  },
  time: Number,
});

const readTime = computed(() => {
  const time = parseInt(props.time);
  return time < 60 ? time + ' minutes' : Math.round(time / 60) + ' hour';
});

const layout = computed(() => {
  return props.layout == 'horizontal' ? 'flex-row' : 'flex-col';
});

const size = computed(() => {
  return props.layout == 'horizontal' ? 'w-64' : '';
});
</script>

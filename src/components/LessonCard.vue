<template>
  <div class="l-lesson-card rounded overflow-hidden shadow">
    <div class="l-lesson-card-image aspect-video bg-sky-600">
      <img />
    </div>
    <div class="l-lesson-card-content bg-slate-50 p-4">
      <h4 class="uppercase">Some Categories</h4>
      <p>The title of the lesson</p>
      <div class="infos flex gap-4">
        <div class="flex gap-2 items-center">
          <ClockIcon class="h-5 w-5"></ClockIcon>
          <span>6 hours</span>
        </div>
        <div class="flex gap-2 items-center">
          <ChartBarIcon class="h-5 w-5"></ChartBarIcon>
          <span>facile</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ClockIcon, ChartBarIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
  layout: {
    type: String,
    default: 'vertical',
    validator(value) {
      return ['vertical', 'horizontal'].includes(value);
    },
  },
});
</script>

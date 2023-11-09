<template>
  <div class="stat-card rounded overflow-hidden font-semibold">
    <div
      class="
        stat-card-label
        flex
        justify-between
        bg-gradient-to-r
        text-slate-50
        p-4
      "
      :class="labelColor"
    >
      <slot name="label">Lessons</slot>

      <span
        class="h-9 w-9 rounded-full flex justify-center items-center"
        :class="badgeColor"
      >
        <slot name="badge">1</slot>
      </span>
    </div>
    <router-link
      :to="props.to"
      class="
        stat-card-action
        flex
        justify-between
        items-center
        py-2
        px-4
        text-slate-100
        w-full
      "
      :class="actionColor"
      ><p>
        <slot name="action">See more</slot>
      </p>
      <ArrowSmallRightIcon class="h-5 w-5 stroke-3"></ArrowSmallRightIcon
    ></router-link>
  </div>
</template>

<script setup>
import { computed } from 'vue';
import { ArrowSmallRightIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
  color: {
    type: String,
    default: 'gray',
    validator(value) {
      // The value must match one of these strings
      return ['gray', 'red', 'orange', 'yellow', 'green', 'blue'].includes(
        value
      );
    },
  },
  to: {
    type: Object,
    default: { name: 'user.dashboard', params: { user: 'mthdht' } },
  },
});

const labelColor = computed(() => {
  return colors['label'][props.color] ?? '';
});

const actionColor = computed(() => {
  return colors['action'][props.color] ?? '';
});

const badgeColor = computed(() => {
  return colors['badge'][props.color] ?? '';
});

const colors = {
  label: {
    gray: 'from-slate-500 from-30% to-slate-400',
    red: 'from-red-500 from-30% to-red-400',
    orange: 'from-orange-500 from-30% to-orange-400',
    yellow: 'from-yellow-500 from-30% to-yellow-400',
    green: 'from-emerald-500 from-30% to-emerald-400',
    blue: 'from-sky-500 from-30% to-sky-400',
  },
  action: {
    gray: 'bg-slate-500',
    red: 'bg-red-500',
    orange: 'bg-orange-500',
    yellow: 'bg-yellow-500',
    green: 'bg-emerald-500',
    blue: 'bg-sky-500',
  },
  badge: {
    gray: 'bg-slate-600',
    red: 'bg-red-600',
    orange: 'bg-orange-600',
    yellow: 'bg-yellow-600',
    green: 'bg-emerald-600',
    blue: 'bg-sky-600',
  },
};
</script>

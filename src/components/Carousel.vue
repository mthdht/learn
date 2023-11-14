<template>
  <section class="flex overflow-hidden gap-4 h-40 relative" ref="carousel">
    <slot :containerSize="carousel"></slot>
    <div
      class="
        prev
        h-40
        bg-slate-500/50
        w-10
        absolute
        left-0
        flex
        items-center
        justify-center
        text-white
      "
    >
      <ChevronLeftIcon></ChevronLeftIcon>
    </div>
    <div
      class="
        next
        h-40
        bg-slate-500/50
        w-10
        absolute
        right-0
        flex
        items-center
        justify-center
        text-white
      "
      @click="next"
    >
      <ChevronRightIcon></ChevronRightIcon>
    </div>
  </section>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import { computed, useSlots, onMounted, ref, provide } from 'vue';

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
  visibleItems: {
    type: Number,
    default: 5,
  },
});

const currentItem = ref(0);
const carousel = ref('carousel');

function next() {
  console.log('next');
}
</script>

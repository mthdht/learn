<template>
  <section class="flex overflow-hidden gap-4 relative" ref="carousel">
    <slot class="test"></slot>
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
      v-show="currentItem != 0"
      @click="prev"
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
      v-show="slideLeft != 0"
      @click="next"
    >
      <ChevronRightIcon></ChevronRightIcon>
    </div>
  </section>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import { computed, provide, ref, useSlots } from 'vue';

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
  aspect: {
    type: String,
    default: '4/3',
  },
});

const currentItem = ref(0);
const carousel = ref('carousel');
const slots = useSlots().default();
const slideLeft = computed(() => {
  return slots.length - props.visibleItems - currentItem.value;
});

provide('currentItem', currentItem);
provide('slideLeft', slideLeft);
provide('aspect', props.aspect);

function next() {
  currentItem.value++;
}

function prev() {
  currentItem.value--;
}
</script>

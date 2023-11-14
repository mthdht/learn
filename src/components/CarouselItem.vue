<template>
  <div class="carousel-item shrink-0 bg-red-500">
    <slot></slot>
  </div>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import { computed, inject, onMounted, getCurrentInstance } from 'vue';

const props = defineProps({
  containerSize: Object,
});

const size = computed(() => {
  //return 100 / (visibleItems + 0.5) + '%';
});

onMounted(() => {
  const instance = getCurrentInstance();
  console.log(instance.parent.refs.carousel.offsetWidth);
});
</script>

<style>
.carousel-item {
  width: v-bind(size);
}
</style>

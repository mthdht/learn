<template>
  <div class="carousel-item shrink-0 bg-red-500">
    <slot></slot>
  </div>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import { computed, inject, onMounted, getCurrentInstance } from 'vue';

const instance = getCurrentInstance();

const size = computed(() => {
  return (
    (instance.parent.refs.carousel.offsetWidth -
      instance.parent.props.visibleItems * 16) /
      (instance.parent.props.visibleItems + 0.5) +
    'px'
  );
});
</script>

<style>
.carousel-item {
  width: v-bind(size);
}
</style>

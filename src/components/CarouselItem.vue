<template>
  <div class="carousel-item shrink-0 bg-red-500" ref="item">
    <slot></slot>
  </div>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import { computed, inject, onMounted, getCurrentInstance, ref } from 'vue';

const instance = getCurrentInstance();
const item = ref();
const currentItem = inject('currentItem');

const size = computed(() => {
  return (
    (instance.parent.refs.carousel.offsetWidth -
      instance.parent.props.visibleItems * 16) /
    (instance.parent.props.visibleItems + 0.5)
  );
});

const pixelSize = computed(() => {
  return size.value + 'px';
});

const translateSize = computed(() => {
  return '-' + (size.value + 16) * currentItem.value + 'px';
});
</script>

<style>
.carousel-item {
  width: v-bind(pixelSize);
  transform: translateX(v-bind(translateSize));
  transition: transform 1s ease;
}
</style>

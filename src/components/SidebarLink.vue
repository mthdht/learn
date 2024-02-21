<template>
  <router-link
    :to="props.to"
    class="p-3 flex gap-4 hover:text-white hover:bg-cyan-800 rounded"
    :class="{ 'bg-cyan-800': props.active }"
  >
    <span class="shrink-0">
      <slot></slot>
    </span>
    <span
      :class="isExpended"
      class="transition-[opacity] duration-1000 whitespace-nowrap"
      >{{ props.label }}</span
    >
  </router-link>
</template>

<script setup>
import { computed, inject } from 'vue';

const isOpen = inject('isOpen');

const props = defineProps({
  to: Object,
  label: String,
  open: Boolean,
  active: Boolean,
});

const isExpended = computed(() => {
  return isOpen.value ? 'opacity-100' : 'opacity-0';
});
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
</style>

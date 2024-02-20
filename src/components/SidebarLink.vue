<template>
  <router-link
    :to="props.to"
    class="p-3 flex gap-4 hover:text-white hover:bg-cyan-800 rounded"
    :class="{ 'bg-cyan-800': props.active }"
  >
    <slot></slot>
    <transition name="fade">
      <span v-show="props.open">{{ props.label }}</span>
    </transition>
  </router-link>
</template>

<script setup>
const props = defineProps({
  to: Object,
  label: String,
  open: Boolean,
  active: Boolean,
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

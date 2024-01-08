<template>
  <div class="select">
    <div class="label" @click="isVisible = !isVisible">
      <p v-if="props.label">{{ label }}</p>
      <p v-else><slot name="label"></slot></p>
    </div>

    <div class="options" v-show="isVisible">
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  label: String,
});

const isVisible = ref(false);
</script>

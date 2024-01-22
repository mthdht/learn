<template></template>

<script setup>
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

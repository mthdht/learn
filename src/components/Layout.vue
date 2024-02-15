<template>
  <Navbar />
  <main class="grow">
    <slot></slot>
  </main>
</template>

<script setup>
import Navbar from '@/components/Navbar.vue';
</script>

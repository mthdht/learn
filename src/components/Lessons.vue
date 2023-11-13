<template>
  <main class="grow overflow-y-hidden container mx-auto p-4">
    <div class="content">
      <h1 class="font-bold text-xl text-sky-700 py-8">Last popular courses</h1>

      <Carousel>
        <div class="carousel-item shrink-0 w-64 bg-red-500">1</div>
        <div class="carousel-item shrink-0 w-64 bg-green-500">2</div>
        <div class="carousel-item shrink-0 w-64 bg-red-500">3</div>
        <div class="carousel-item shrink-0 w-64 bg-green-500">4</div>
        <div class="carousel-item shrink-0 w-64 bg-sky-500">5</div>
        <div class="carousel-item shrink-0 w-64 bg-orange-500">6</div>
        <div class="carousel-item shrink-0 w-64 bg-red-500">7</div>
      </Carousel>
    </div>
  </main>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import Carousel from './Carousel.vue';
</script>

<template>
  <main class="grow overflow-y-hidden container mx-auto p-4">
    <div class="content">
      <h1 class="font-bold text-xl text-sky-700 py-8">Last popular courses</h1>

      <section class="flex overflow-hidden gap-4 h-40 relative my-8">
        <div class="carousel-item shrink-0 w-64 bg-red-500">1</div>
        <div class="carousel-item shrink-0 w-64 bg-green-500">2</div>
        <div class="carousel-item shrink-0 w-64 bg-red-500">3</div>
        <div class="carousel-item shrink-0 w-64 bg-green-500">4</div>
        <div class="carousel-item shrink-0 w-64 bg-sky-500">5</div>
        <div class="carousel-item shrink-0 w-64 bg-orange-500">6</div>
        <div class="carousel-item shrink-0 w-64 bg-red-500">7</div>

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
        >
          <ChevronRightIcon></ChevronRightIcon>
        </div>
      </section>

      <Carousel></Carousel>
    </div>
  </main>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import Carousel from './Carousel.vue';
</script>

<template>
  <main class="grow container mx-auto p-4">
    <div class="content">
      <section class="last-courses">
        <h1 class="font-bold text-xl text-sky-700 py-8">
          Last popular courses
        </h1>

        <Carousel :visibleItems="5" aspect="16/9">
          <CarouselItem>1</CarouselItem>
          <CarouselItem>2</CarouselItem>
          <CarouselItem>3</CarouselItem>
          <CarouselItem>4</CarouselItem>
          <CarouselItem>5</CarouselItem>
          <CarouselItem>6</CarouselItem>
          <CarouselItem>7</CarouselItem>
        </Carousel>
      </section>

      <section class="all-courses"></section>
    </div>
  </main>
</template>

<script setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline';
import Carousel from './Carousel.vue';
import CarouselItem from './CarouselItem.vue';
</script>

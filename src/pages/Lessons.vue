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

      <section class="all-courses">
        <div class="filters-and-search flex gap-4 my-8 font-semibold">
          <select name="category" id="category" class="px-4 py-2 rounded">
            <option value="javascript" disabled selected hidden>
              choose a theme
            </option>
            <option value="javascript">Javascript</option>
            <option value="javascript">Javascript</option>
            <option value="javascript">Javascript</option>
            <option value="javascript">Javascript</option>
            <option value="javascript">Javascript</option>
          </select>
        </div>

        <div class="filtered-courses grid grid-cols-5 gap-4">
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
          <LessonCard
            img="some link"
            alt="some alt"
            level="easy"
            :time="240"
            layout="vertical"
          ></LessonCard>
        </div>
      </section>
    </div>
  </main>
</template>

<script setup>
import {
  ChevronRightIcon,
  ChevronLeftIcon,
  ChevronDownIcon,
} from '@heroicons/vue/24/outline';
import Carousel from '@/components/Carousel.vue';
import CarouselItem from '@/components/CarouselItem.vue';
import Select from '@/components/Select.vue';
import Option from '@/components/Option.vue';
import LessonCard from '@/components/LessonCard.vue';
</script>

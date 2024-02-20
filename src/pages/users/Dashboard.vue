<template>
  <AdminLayout>
    <div class="p-8">
      <section class="grid md:grid-cols-2 lg:grid-cols-4 gap-2">
        <StatisticsCard color="red">
          <template #label>Cours</template>
          <template #badge>99+</template>
          <template #action></template>
        </StatisticsCard>

        <StatisticsCard color="yellow">
          <template #label>Cours</template>
          <template #badge>99+</template>
          <template #action></template>
        </StatisticsCard>

        <StatisticsCard color="green">
          <template #label>Cours</template>
          <template #badge>99+</template>
          <template #action></template>
        </StatisticsCard>

        <StatisticsCard color="blue">
          <template #label>Cours</template>
          <template #badge>99+</template>
          <template #action></template>
        </StatisticsCard>
      </section>
    </div>
  </AdminLayout>
</template>

<script setup>
import StatisticsCard from '@/components/StatisticsCard.vue';
import { ArrowSmallRightIcon } from '@heroicons/vue/24/outline';
</script>

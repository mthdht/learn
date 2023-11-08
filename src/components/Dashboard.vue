<template>
  <main class="grow flex overflow-hidden">
    <Sidebar> </Sidebar>
    <div class="content grow overflow-auto p-4 pt-8">
      <section>
        <div class="stat-card w-1/4 rounded overflow-hidden font-semibold">
          <div
            class="
              stat-card-label
              flex
              justify-between
              bg-gradient-to-r
              from-sky-500 from-30%
              to-sky-400
              text-slate-50
              p-4
            "
          >
            <p>Lorem, ipsum dolor.</p>

            <span
              class="
                h-7
                w-7
                rounded-full
                bg-sky-500
                flex
                justify-center
                items-center
              "
              >7</span
            >
          </div>
          <router-link
            :to="{ name: 'user.lessons', params: { user: 'mthdht' } }"
            class="
              stat-card-action
              flex
              justify-between
              items-center
              py-2
              px-4
              bg-sky-600
              text-slate-100
              w-full
            "
            ><p>Voir plus</p>
            <ArrowSmallRightIcon class="h-5 w-5 stroke-3"></ArrowSmallRightIcon
          ></router-link>
        </div>
      </section>
    </div>
  </main>
</template>

<script setup>
import Sidebar from './Sidebar.vue';
import { ArrowSmallRightIcon } from '@heroicons/vue/24/outline';
</script>

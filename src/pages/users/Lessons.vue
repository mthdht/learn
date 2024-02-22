<template>
  <AdminLayout>
    <section class="p-8">
      <div class="flex justify-between items-center font-semibold">
        <h2 class="text-3xl font-semibold">Mes cours</h2>
        <div class="flex gap-4 grow justify-end">
          <div class="relative w-1/3">
            <MagnifyingGlassIcon
              class="w-6 h-6 absolute left-3 top-[.6rem] text-slate-500"
            />
            <input
              type="text"
              class="px-4 py-2 shadow-inner border rounded w-full pl-10"
              placeholder="search for lessons"
              v-model="search"
            />
          </div>
          <select
            class="
              px-2
              py-1
              rounded
              bg-slate-200
              shadow-inner
              hover:bg-slate-300
            "
          >
            <option class="bg-slate-100" disabled>Status</option>
            <option class="bg-slate-100">Publié</option>
            <option class="bg-slate-100">Non publié</option>
          </select>
          <select
            class="
              px-2
              py-1
              rounded
              bg-slate-200
              shadow-inner
              hover:bg-slate-300
            "
          >
            <option class="bg-slate-100" disabled>Status</option>
            <option class="bg-slate-100">Publié</option>
            <option class="bg-slate-100">Non publié</option>
          </select>

          <router-link
            :to="{ name: 'user.lessons.create', params: { user: 'mthdht' } }"
          >
            <button
              class="
                rounded
                bg-emerald-500
                text-white
                hover:bg-emerald-600
                px-3
                py-2
              "
            >
              New
            </button>
          </router-link>
        </div>
      </div>
    </section>
    <section></section>
  </AdminLayout>
</template>

<script setup>
import { ref } from 'vue';
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline';

const search = ref();
</script>

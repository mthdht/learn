<template>
  <AdminLayout>
    <div class="flex h-full">
      <section
        class="w-64 bg-slate-50 h-full max-h-full overflow-auto divide-y"
      >
        <div class="px-3 py-3 hover:bg-slate-200" v-for="n in 15">
          <h4 class="flex justify-between items-center">
            <span class="font-semibold">Titre de l'article</span>
            <span class="text-xs italic">Le 17/08/2024</span>
          </h4>
          <p class="line-clamp-2 leading-4 text-slate-500">
            Lorem Ipsum. "Neque porro quisquam est qui dolorem ... ipsum
          </p>
        </div>
      </section>
      <section class="grow max-h-full"></section>
      <section
        class="w-96 bg-slate-100 max-h-full p-8 font-semibold border-l-4"
      >
        <h3 class="text-xl mb-8">Customization</h3>
        <div class="flex flex-col gap-2 mb-4">
          <label for="url">Url de la page:</label>
          <input
            type="text"
            class="px-3 py-2 rounded-md shadow"
            id="url"
            placeholder="le-titre-de-ma-page"
          />
        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label for="url">Category:</label>
          <select class="px-3 py-2 rounded bg-white shadow">
            <option class="bg-slate-100">Javascript</option>
            <option class="bg-slate-100">PHP</option>
          </select>
        </div>
      </section>
    </div>
  </AdminLayout>
</template>

<script setup>
import { ref } from 'vue';
</script>

<template>
  <AdminLayout>
    <div class="flex h-full">
      <section
        class="w-64 bg-slate-50 h-full max-h-full overflow-auto divide-y"
      >
        <div class="px-3 py-2" v-for="n in 15">
          <h4 class="flex justify-between items-center">
            <span class="font-semibold">Titre de l'article</span>
            <span class="text-xs italic">Le 17/08/2024</span>
          </h4>
          <p class="line-clamp-2 leading-4 text-slate-500">
            Lorem Ipsum. "Neque porro quisquam est qui dolorem ... ipsum
          </p>
        </div>
      </section>
      <section class="grow bg-red-300 max-h-full"></section>
      <section class="w-96 bg-red-100 max-h-full"></section>
    </div>
  </AdminLayout>
</template>

<script setup></script>

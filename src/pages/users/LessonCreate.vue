<template>
  <AdminLayout>
    <section v-show="isPreview" class="content flex gap-4 container relative">
      <button
        @click="isPreview = !isPreview"
        class="absolute top-4 left-6 z-50"
      >
        &lt-- retour
      </button>
      <section class="w-full default-them flex">
        <MdPreview :editorId="id" :modelValue="text" class="w-3/4" />
        <MdCatalog :editorId="id" :scrollElement="scrollElement" class="grow" />
      </section>
    </section>
    <div v-show="!isPreview" class="flex h-full">
      <section
        class="
          w-64
          bg-slate-50
          h-full
          max-h-full
          overflow-auto
          divide-y
          shrink-0
        "
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
      <section class="grow max-h-full">
        <MdEditor
          v-model="text"
          language="fr-FR"
          class="h-full"
          :toolbarsExclude="['github']"
          @onSave="onSave"
        />
      </section>
      <section
        class="w-96 bg-slate-100 max-h-full p-8 font-semibold border-l-4"
      >
        <button
          @click="isPreview = !isPreview"
          class="float-right rounded px-3 py-2 bg-sky-700 text-white"
        >
          Prévisualiser
        </button>
        <h3 class="text-xl mb-8">Customization</h3>
        <div class="flex flex-col gap-2 mb-8">
          <label for="url">Url de la page:</label>
          <input
            type="text"
            class="px-3 py-2 rounded-md shadow"
            id="url"
            placeholder="le-titre-de-ma-page"
            v-model="slug"
          />
          <p>url finale:</p>
          <p>https://exemple.com/{{ slug }}</p>
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
import { useRouter } from 'vue-router';

import { MdEditor, config, MdPreview, MdCatalog } from 'md-editor-v3';
import FR_FR from '@vavt/cm-extension/dist/locale/fr-FR';
import 'md-editor-v3/lib/style.css';
config({
  editorConfig: {
    languageUserDefined: {
      'fr-FR': FR_FR,
    },
  },
});

const text = ref('# Hello Editor');
const slug = ref();
const id = 'preview-only';

const onSave = (v, h) => {
  console.log(v);

  h.then((html) => {
    console.log(html);
  });
};

const isPreview = ref(false);
</script>

<style scoped>
.md-editor {
  height: 100%;
}
</style>

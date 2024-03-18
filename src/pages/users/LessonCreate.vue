<template>
  <AdminLayout>
    <section
      v-show="isPreview"
      class="lesson-preview content flex gap-4 container relative h-full"
    >
      <button
        @click="isPreview = !isPreview"
        class="absolute top-4 left-6 z-50"
      >
        &lt-- retour
      </button>
      <section class="w-full default-theme flex bg-slate-50">
        <MdPreview :editorId="id" :modelValue="text" class="w-3/4" />
        <MdCatalog :editorId="id" :scrollElement="scrollElement" class="grow" />
      </section>
    </section>

    <div v-show="!isPreview" class="flex h-full">
      <section
        class="
          lessons-list
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
        class="
          lesson-options
          w-96
          bg-slate-100
          max-h-full
          p-8
          font-semibold
          border-l-4
          relative
          flex flex-col
          gap-8
        "
      >
        <button
          @click="isPreview = !isPreview"
          class="rounded px-3 py-2 bg-sky-600 text-white self-end"
        >
          Prévisualiser
        </button>
        <h3 class="text-xl">Customization</h3>
        <div class="flex flex-col gap-2">
          <label for="url">Url de la page:</label>
          <input
            type="text"
            class="px-3 py-2 rounded-md shadow"
            id="url"
            placeholder="le-titre-de-ma-page"
            v-model="slug"
          />
          <p class="text-slate-500 text-sm">https://exemple.com/{{ slug }}</p>
        </div>

        <div class="flex flex-col gap-2">
          <label for="url">Category:</label>
          <select class="px-3 py-2 rounded bg-white shadow">
            <option class="bg-slate-100">Javascript</option>
            <option class="bg-slate-100">PHP</option>
          </select>
        </div>
        <InputList
          label="objectifs"
          placeholder="connaître les coordonnées..."
          v-model="objectifs"
        ></InputList>
        <InputList
          label="prérequis"
          placeholder="théorème de pythagore"
          v-model="prerequisites"
        ></InputList>

        <div class="flex justify-around bottom-8 grow items-end">
          <button
            class="
              px-3
              py-2
              bg-emerald-500
              text-white
              hover:bg-emerald-600
              rounded
            "
          >
            Save
          </button>
          <button
            class="px-3 py-2 bg-sky-600 text-white hover:bg-sky-700 rounded"
          >
            Publish
          </button>
        </div>
      </section>
    </div>
  </AdminLayout>
</template>

<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';

import InputList from '@/components/InputList.vue';

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

const scrollElement = document.documentElement;

const text = ref('# Hello Editor');
const slug = ref();
const id = 'preview-only';
const objectifs = ref([]);
const prerequisites = ref([]);

const onSave = (v, h) => {
  console.log(v);

  h.then((html) => {
    console.log(html);
  });
};

const isPreview = ref(false);
</script>

<style scoped>
.md-editor,
.md-editor-preview {
  @apply bg-slate-50;
  height: 100%;
}
</style>

<template>
  <AdminLayout>
    <section v-show="isPreview" class="lesson-preview content relative h-full">
      <button
        @click="isPreview = !isPreview"
        class="absolute top-4 left-6 z-50"
      >
        &lt-- retour
      </button>
      <header class="bg-emerald-50">
        <div class="py-12 container">
          <p class="uppercase text-sky-800 font-semibold tracking-tight">
            JAVAscript
          </p>
          <h2 class="text-4xl font-semibold mb-8">titre de la leçon</h2>

          <p class="text-slate-600 mb-4">
            Python est très demandé et accessible pour les débutants. Apprenez à
            coder avec Python pour écrire des programmes simples mais puissants,
            et pour automatiser les tâches.
          </p>

          <div class="infos flex gap-4 mt-4">
            <div class="flex gap-2 items-center">
              <ClockIcon class="h-5 w-5"></ClockIcon>
              <span>1 hour</span>
            </div>
            <div class="flex gap-2 items-center">
              <ChartBarIcon class="h-5 w-5"></ChartBarIcon>
              <span>easy</span>
            </div>
          </div>

          <div class="prerequisites-and-goal mt-6">
            <p class="font-semibold mb-2"><bold>Objectifs:</bold></p>
            <ul class="list-disc list-inside mb-8 ml-4">
              <li v-for="(objectif, index) in objectifs" :key="index">
                {{ objectif }}
              </li>
            </ul>
            <p class="font-semibold mb-2"><bold>Prérequis:</bold></p>
            <ul class="list-disc list-inside ml-4">
              <li v-for="(prerequisite, index) in prerequisites" :key="index">
                {{ prerequisite }}
              </li>
            </ul>
          </div>
        </div>
      </header>
      <section class="w-full default-theme flex bg-slate-50 container">
        {{ text }}
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
          :toolbarsExclude="['github', 'save']"
          @onSave="onSave"
          ref="editor"
        />
      </section>

      <section
        class="
          lesson-options
          w-96
          bg-slate-100
          h-full
          max-h-full
          overflow-auto
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
            @click="save"
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
const editor = ref();
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

const save = () => {
  editor.value?.triggerSave();
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

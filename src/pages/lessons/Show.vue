<template>
  <Layout>
    <main class="">
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
            <ul class="list-disc list-inside">
              <li>
                <bold class="font-semibold">Prérequis:</bold> Javascript, php,
                variable
              </li>
              <li>
                <bold class="font-semibold">Objectifs:</bold> dfgdfg fgdfgdfgdfg
                dfdfgdf gdfgdfgdf gdfg aze aze azeazeaze
                zerergfghjtyut-gzefzefert ertert zerzer
              </li>
            </ul>
          </div>
        </div>
      </header>
      <section class="content flex gap-4 container">
        <section class="w-3/4 default-theme">
        <MdPreview :editorId="id" :modelValue="text" />
        <MdCatalog :editorId="id" :scrollElement="scrollElement" />
        </section>
        <aside class="grow"></aside>
      </section>
    </main>
  </Layout>
</template>

<script setup>
import { ClockIcon, ChartBarIcon } from '@heroicons/vue/24/outline';

import { ref } from 'vue';
import { MdPreview, MdCatalog } from 'md-editor-v3';
import 'md-editor-v3/lib/preview.css';

const id = 'preview-only';
const text = ref('# Hello Editor');
const scrollElement = document.documentElement;
</script>

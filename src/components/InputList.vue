<template>
  <div class="flex flex-col gap-2">
    <label for="url">{{ props.label }}:</label>
    <ul class="list-disc list-inside">
      <li
        v-for="(item, index) in model"
        :key="index"
        class="flex items-center text-slate-500 gap-2"
      >
        -
        <span class="grow" v-show="isEdit != index">{{ item }}</span>
        <div v-show="isEdit == index" class="grow flex gap-2">
          <input
            type="text"
            v-model="model[index]"
            class="px-3 py-2 rounded-md shadow grow"
          />
          <button
            @click="isEdit = null"
            class="bg-emerald-400 text-white rounded px-3 py-2"
          >
            ok
          </button>
        </div>
        <div v-show="isEdit != index" class="flex gap-2">
          <button
            class="p-1 border rounded hover:bg-slate-200"
            @click="edit(index)"
          >
            <PencilIcon class="w-5 h-5 text-slate-700"></PencilIcon>
          </button>
          <button
            class="p-1 border rounded hover:bg-slate-200"
            @click="erase(index)"
          >
            <TrashIcon class="w-5 h-5 text-slate-700"></TrashIcon>
          </button>
        </div>
      </li>
    </ul>
    <div class="flex gap-2">
      <input
        type="text"
        v-model="item"
        class="px-3 py-2 rounded-md shadow grow"
        :placeholder="props.placeholder"
      />
      <button class="bg-emerald-400 text-white rounded px-3 py-2" @click="add">
        <PlusIcon class="w-5 h-5"></PlusIcon>
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

import { PencilIcon, TrashIcon, PlusIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
  label: String,
  placeholder: String,
});

const model = defineModel();

const item = ref();

const isEdit = ref();

function add() {
  model.value.push(item.value);
  item.value = '';
}

function edit(index) {
  isEdit.value = index;
}

function erase(index) {
  model.value.splice(index, 1);
}
</script>

<template>
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
        class="h-7 w-7 rounded-full bg-sky-500 flex justify-center items-center"
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
</template>

<script setup>
const props = defineProps({
  color: {
    type: String,
    default: 'gray',
    validator(value) {
      // The value must match one of these strings
      return ['gray', 'red', 'orange', 'yellow', 'blue'].includes(value);
    },
  },
});

const backgroundColor = {
  gray: 'from-slate-500 from-30% to-slate-400',
  red: 'from-red-500 from-30% to-red-400',
  orange:'from-orange-500 from-30% to-orange-400',
  yellow: 'from-yellow-500 from-30% to-yellow-400',
  green: 'from-emerald-500 from-30% to-emerald-400'
  blue: 'from-sky-500 from-30% to-sky-400'
}
</script>

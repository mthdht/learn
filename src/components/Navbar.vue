<template>
  <header class="navbar bg-gradient-to-r from-sky-500 to-purple-500 text-white">
    <div class="navbar-container flex gap-4 font-semibold p-2">
      <div class="navbar-brand bg-red-500 w-32"></div>
      <nav class="navbar-links flex justify-center gap-4 grow">
        <router-link to="/">Go to Home</router-link>
        <router-link
          :to="{ name: 'user.dashboard', params: { user: 'mthdht' } }"
          >Go to dashboard</router-link
        >
      </nav>
      <div class="navbar-actions w-24 bg-green-500"></div>
    </div>
  </header>
</template>

<script setup></script>

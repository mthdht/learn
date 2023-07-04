<template>
  <header class="navbar">
    <div
      class="navbar-container flex gap-4 container mx-auto font-semibold py-2"
    >
      <div class="navbar-brand bg-red-500 w-32"></div>
      <div class="navbar-links flex justify-center gap-4 grow">
        <router-link to="/">Go to Home</router-link>
        <router-link to="/dashboard">Go to dashboard</router-link>
      </div>
      <div class="navbar-actions w-24 bg-green-500"></div>
    </div>
  </header>
</template>

<script setup></script>

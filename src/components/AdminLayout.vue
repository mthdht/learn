<template>
  <AdminNavbar />
  <div class="content grow">
    <AdminSidebar />
    <main class="ml-20 p-8">
      <slot></slot>
    </main>
  </div>
</template>

<script setup>
import AdminNavbar from '@/components/AdminNavbar.vue';
import AdminSidebar from '@/components/AdminSidebar.vue';
</script>

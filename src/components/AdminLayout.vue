<template>
  <AdminNavbar />
  <div class="content">
    <Sidebar />
    <main class="pl-48">
      <slot></slot>
    </main>
  </div>
</template>

<script setup>
import AdminNavbar from '@/components/AdminNavbar.vue';
import Sidebar from '@/components/Sidebar.vue';
</script>

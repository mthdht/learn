<template>
  <AdminNavbar />
  <div class="content grow max-h-full overflow-auto">
    <AdminSidebar />
    <main class="ml-18 h-full max-h-full overflow-auto">
      <slot></slot>
    </main>
  </div>
</template>

<script setup>
import AdminNavbar from '@/components/AdminNavbar.vue';
import AdminSidebar from '@/components/AdminSidebar.vue';
</script>

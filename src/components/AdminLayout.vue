<template>
  <AdminNavbar />
  <div class="content grow max-h-full overflow-auto flex">
    <AdminSidebar />
    <main class="h-full max-h-full overflow-auto grow">
      <slot></slot>
    </main>
  </div>
</template>

<script setup>
import AdminNavbar from '@/components/AdminNavbar.vue';
import AdminSidebar from '@/components/AdminSidebar.vue';
</script>

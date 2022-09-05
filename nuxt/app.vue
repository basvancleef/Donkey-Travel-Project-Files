<template>
  <div class="bg-gray-100">
    <!-- <Default /> -->
    <!-- <Custom /> -->
    <NuxtLayout>
      <NuxtPage />
    </NuxtLayout>
  </div>
</template>

<script setup>
import '~/assets/css/app.css'
import Default from './layouts/default.vue';
import Custom from './layouts/custom.vue';
</script>

<template>
    <h1 class="text-blue-500 mr-5">{{ title }}</h1>
  </template>

  <script setup lang="ts">
 import { defineProps } from 'vue';

const props = defineProps<{
  title: string;
}>()
</script>

<style scoped>


</style>

<template>
    <div class="card border rounded-lg shadow-lg bg-gray-200 overflow-hidden">
      <!-- Header -->
      <div class="card-header p-4">
        <h3 class="text-lg font-semibold">{{ header }}</h3>
      </div>

      <!-- Body -->
      <div class="card-body p-4">
        <p>{{ body }}</p>
      </div>

      <!-- Footer -->
      <div class="card-footer p-4 flex justify-between items-center">
        <div>{{ footer }}</div>
        <slot></slot>
      </div>
    </div>
  </template>

  <script setup lang="ts">
  import { defineProps } from 'vue';

  const props = defineProps<{
    header: string;
    body: string;
    footer: string;
  }>();
  </script>

  <style scoped>
  .card {
    max-width: 800px;
    margin: 1rem;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  </style>

<template>
    <button @click="handleClick" class="bg-red-900 text-blue-500 py-2 px-4 rounded">
      {{ text }}
    </button>
  </template>

  <script setup lang="ts">
  import { defineProps } from 'vue';

  const props = defineProps<{
    text: string;
    onClick: () => void;
  }>();


  const handleClick = () => {
    props.onClick();
  };
  </script>

  <style scoped>
  button {
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
  }

  button:hover, button:focus {
  background-color: rgb(153 27 27);
  border: none;
  outline: none;
}
  </style>

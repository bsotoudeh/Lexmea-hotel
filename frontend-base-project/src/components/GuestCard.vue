<template>
    <Card
      :header="guestName"
      :body="roomNumber ? `Room: ${roomNumber}` : 'No room assigned'"
      :footer="''"
    >
      <div class="flex space-x-2">
        <button @click="editGuest" class="bg-red-900 text-white px-4 py-2 rounded">Edit</button>
        <button @click="deleteGuest" class="bg-red-900 text-white px-4 py-2 rounded">Delete</button>
      </div>
    </Card>
  </template>

  <script setup lang="ts">
  import { ref } from 'vue';
  import Card from './Card.vue';

  const guestName = 'John Doe';
  const roomNumber = 'Room 101';

  const editGuest = () => {
    console.log('Editing guest');
  };

  const deleteGuest = () => {
    console.log('Deleting guest');
  };
  </script>

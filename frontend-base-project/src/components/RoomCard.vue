<template>
    <Card
      :header="roomNumber"
      :body="bodyContent"
      :footer="''"
    >
      <div class="flex space-x-2">
        <button @click="assignGuest" class="bg-red-900 text-white px-4 py-2 rounded">Assign Guest</button>
        <button @click="setRoomReady" class="bg-red-900 text-white px-4 py-2 rounded">Set as Ready</button>
        <button @click="markRoomEmpty" class="bg-red-900 text-white px-4 py-2 rounded">Room Empty</button>
      </div>
    </Card>
  </template>

<script setup lang="ts">
  import { ref, computed } from 'vue';
  import Card from './Card.vue';

  const roomNumber = 'Room 101';
  const roomStatus = ref('Status: Empty');

  const bodyContent = computed(() => {
    return `Capacity: 2, Status: ${roomStatus.value}`;
  });

  const assignGuest = () => {
    roomStatus.value = 'Status: Assigned to Guest';

  };

  const setRoomReady = () => {
    roomStatus.value = 'Status: Ready';
  };

  const markRoomEmpty = () => {
    roomStatus.value = 'Status: Empty';
  };
  </script>

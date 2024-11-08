<template>
    <div>
        <div class="flex">
            <PageTitle :title="'Rooms'"/>
            <AddButton :text="'Add new Room'" :onClick="addRoom" />
        </div>
        <div class="flex">
            <RoomCard />
            <RoomCard />
        </div>
    </div>
</template>
<script setup lang="ts">
import PageTitle from "../components/PageTitle.vue";
import AddButton from '../components/AddButton.vue';
import RoomCard from '../components/RoomCard.vue';



const addRoom = () => {
  console.log('Rooms added!');
};
</script>
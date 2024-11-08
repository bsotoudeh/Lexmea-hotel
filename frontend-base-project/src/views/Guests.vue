<template>
    <div>
        <div class="flex">
            <PageTitle :title="'Guests'"/>
            <AddButton :text="'Add new Guest'" :onClick="addGuest" />
        </div>
        <div class="flex">
            <GuestCard />
            <GuestCard />
        </div>
    </div>
</template>
<script setup lang="ts">
import PageTitle from "../components/PageTitle.vue";
import AddButton from '../components/AddButton.vue';
import GuestCard from '../components/GuestCard.vue';

const addGuest = () => {
  console.log('Guest added!');
};
</script>
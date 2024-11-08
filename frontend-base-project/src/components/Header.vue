<template>
<nav class="flex flex-wrap fixed top-0 left-0 right-0 bg-red-900 p-6">
    <div class="flex items-center flex-shrink-0  text-sky-500 mr-6 cursor-pointer">
        <router-link to="/rooms" class="font-semibold text-xl tracking-tight nav-link">Rooms</router-link>
    </div>
    <div class="flex items-center flex-shrink-0 text-sky-500 mr-6 cursor-pointer">
        <router-link to="/guests" class="font-semibold text-xl tracking-tight nav-link">Guests</router-link>
    </div>
</nav>
</template>
<script setup lang="ts">
</script>
<style>
.nav-link {
  text-decoration: none;
  margin-right: 15px;
}

.nav-link.router-link-active {
  text-decoration: underline;
}

nav {
  padding: 1rem;
}
</style>
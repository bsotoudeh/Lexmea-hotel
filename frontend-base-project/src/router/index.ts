import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';
import Guests from '../views/Guests.vue';
import Rooms from '../views/Rooms.vue';


const routes: Array<RouteRecordRaw> = [
  { path: '/guests', component: Guests, name: 'Guests' },
  { path: '/rooms', component: Rooms, name: 'Rooms' },
];


const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

import { createRouter, createWebHistory } from 'vue-router';
import Produk from './Pages/Produk.vue';
import Welcome from './Pages/Welcome.vue';

const routes = [
  { path: '/', name: 'Welcome', component: Welcome },
  { path: '/produk', name: 'Produk', component: Produk }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;

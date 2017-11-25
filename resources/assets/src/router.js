import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from './views/Auth/Login.vue';
import Home from './views/Static/Home.vue';
import About from './views/Static/About.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    linkActiveClass: "is-active",
    scrollBehavior: (to, from, savePosition) => ({y: 0}),
    routes: [
      {
        path: '/login', component: Login
      },
      {
        path: '/about', component: About
      },
      {
        path: '/', component: Home
      }
    ]
  })
;

export default router;

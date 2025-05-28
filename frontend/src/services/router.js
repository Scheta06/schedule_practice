import { createMemoryHistory, createRouter } from 'vue-router'
import Login from './../views/Auth/Login.vue';
import Home from './../views/Home.vue'
import Cars from './../views/Cars.vue'

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/login',
        component: Login,
    },
    {
        path: '/cars',
        component: Cars,
    },
];

export default createRouter({
    history: createMemoryHistory(),
    routes
})
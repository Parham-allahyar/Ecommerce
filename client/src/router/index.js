import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from './../views/Auth/Login.vue'
import Auth from './../views/Auth/Auth.vue'

Vue.use(VueRouter)

const routes = [{
        path: '/login',
        component: Login
    },
    {
        path: '/auth',
        component: Auth
    }

]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
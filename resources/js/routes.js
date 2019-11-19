import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router)
export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            component: () => import(/* webpackChunkName: "Profile" */ './components/Profile'),
            name: 'prifile'
        },
        {
            path: '/profile',
            component: () => import(/* webpackChunkName: "Dashboard" */ './components/Dashboard'),
            name: 'Dashboard'
        },
         {
            path: '/users',
            component: () => import(/* webpackChunkName: "Users" */ './components/Users'),
            name: 'users'
        },
    ]
})
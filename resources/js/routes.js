import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router)
export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            component: () => import(/* webpackChunkName: "Profile" */ './components/Dashboard'),
            name: 'prifile'
        },
        {
            path: '/profile',
            component: () => import(/* webpackChunkName: "Dashboard" */ './components/Profile'),
            name: 'Dashboard'
        },
        {
            path: '/users',
            component: () => import(/* webpackChunkName: "Users" */ './components/Users'),
            name: 'users'
        },
        {
            path: '/developer',
            component: () => import(/* webpackChunkName: "Developer" */ './components/Developer'),
            name: 'developer'
        },
        {
            path: '/*',
            component: () => import(/* webpackChunkName: "NotFound" */ './components/NotFound'),
            name: 'notfound'
        },
    ]
})
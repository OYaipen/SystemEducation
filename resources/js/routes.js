import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router)
export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            component: () => import(/* webpackChunkName: "Profile" */ './components/dashboard/Dashboard'),
            name: 'prifile'
        },
        {
            path: '/profile',
            component: () => import(/* webpackChunkName: "Dashboard" */ './components/profile/Profile'),
            name: 'Dashboard'
        },
        {
            path: '/users',
            component: () => import(/* webpackChunkName: "Users" */ './components/admin/Users'),
            name: 'users'
        },
        {
            path: '/developer',
            component: () => import(/* webpackChunkName: "Developer" */ './components/developer/Developer'),
            name: 'developer'
        },
        {
            path: '/*',
            component: () => import(/* webpackChunkName: "NotFound" */ './components/404/NotFound'),
            name: 'notfound'
        },
    ]
})
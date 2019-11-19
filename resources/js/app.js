
require('./bootstrap');

window.Vue = require('vue');

import router from './routes';
import VueRouter from 'vue-router'
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

new Vue({
    el: '#app',
    router
  });

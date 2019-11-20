
require('./bootstrap');

window.Vue = require('vue');
import moment from 'moment';
import swal from "sweetalert2";
import VueProgressBar from 'vue-progressbar'
import { HasError, AlertError } from 'vform';
import router from './routes';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

Vue.use(VueProgressBar, {
  color: '#ffed4a',
  failedColor: 'red',
  height: '3px',
})

import { Form } from "vform";
window.Form = Form;

window.swal = swal;
const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.toast = toast;
Vue.filter('upText', function (text) {
  return text.charAt(0).toUpperCase() + text.slice(1)
});

Vue.filter('myDate', function (created) {
  moment.locale('es');
  return moment(created).format('D MMM YYYY');
});

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);


window.Fire = new Vue();
new Vue({
  el: '#app',
  router
});

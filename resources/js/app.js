
require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';


//load components
require('./register');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(VueRouter);
Vue.config.productionTip = false;
import routes from './router/routes';

const router = new VueRouter({
   mode: 'history',
   base: __dirname,
   routes
});

const app = new Vue({
   router:router,
   el: '#app',
});

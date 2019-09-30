import './bootstrap';
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import App from './App';
import {GlobalFilters} from './filters'

Vue.use(VueRouter);
Vue.use(GlobalFilters);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const main = new Vue({
    router,
    ...App
});

import './bootstrap';
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import App from './App';
import Lang from 'lang.js';
import translations from './translations';

const lang = new Lang({
    locale: 'en',
    messages: translations,
});

Vue.filter('trans', (...args) => {
    return lang.get(...args);
});

Vue.filter('ucfirst', (str) => {
    return str.charAt(0).toUpperCase() + str.slice(1)
});

Vue.use(VueRouter);

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

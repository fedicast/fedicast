import Vue from 'vue';
import Search from './components/Search';

Vue.config.productionTip = false;

new Vue({
    components: {
        Search,
    },
}).$mount('#vue-search');

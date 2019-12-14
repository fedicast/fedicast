import translations from './translations';
import Lang from 'lang.js';

const lang = new Lang({
    locale: 'en',
    messages: translations,
});

export function mapFilters(filters) {
    return filters.reduce((result, filter) => {
        result[filter] = function(...args) {
            return this.$options.filters[filter](...args);
        };
        return result;
    }, {});
}

export const GlobalFilters = {
    install (Vue, options) {
        Vue.filter('trans', (...args) => {
            return lang.get(...args);
        });

        Vue.filter('ucfirst', (str) => {
            return str.charAt(0).toUpperCase() + str.slice(1)
        });
    }
};




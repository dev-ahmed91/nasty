/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var moment = require('moment');

require('moment/locale/en-gb'); // locales all in lower-case

exports.install = function (Vue, options) {
    Vue.prototype.moment = function (...args) {
        return moment(...args);
    };

    Vue.prototype.route = function (...args) {
        return route(...args);
    };
}


window.Vue = require('vue');
window.NProgress = require('nprogress');

axios.interceptors.request.use(request => {
    NProgress.start()
    return request
})

axios.interceptors.response.use(response => {
    NProgress.done(true)
    return response
}, function (error) {
    NProgress.done(true)
    return Promise.reject(error);
});

Vue.use(exports);

Vue.component('users-list', require('./components/UsersList.vue').default);
Vue.component('settings-list', require('../../Modules/Setting/Resources/components/SettingsList.vue').default);
Vue.component('products-list', require('../../Modules/Product/Resources/components/ProductsList.vue').default);
Vue.component('orders-creation', require('../../Modules/Product/Resources/components/OrdersCreation.vue').default);
Vue.component('categories-list', require('../../Modules/Category/Resources/components/CategoriesList.vue').default);
Vue.component('countries-list', require('../../Modules/Country/Resources/components/CountriesList.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('orders-list', require('../../Modules/Product/Resources/components/OrdersList.vue').default);
Vue.component('branches-list', require('../../Modules/Branch/Resources/components/BranchesList.vue').default);


Vue.use(exports);

const app = new Vue({
    delimiters: ['{(', ')}'],
    el: '#app'
});

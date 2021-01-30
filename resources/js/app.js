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
})

Vue.use(exports);

Vue.component('users-list', require('./components/UsersList.vue').default);
Vue.component('settings-list', require('../../modules/Setting/Resources/componenets/SettingsList.vue').default);
Vue.component('countries-list', require('../../modules/Country/Resources/components/CountriesList.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));


Vue.use(exports);

const app = new Vue({
    delimiters: ['{(', ')}'],
    el: '#app'
});

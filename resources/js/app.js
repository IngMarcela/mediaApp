/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.EventBus = new Vue();
window.not_found_unless = function (condition) {
    if(! condition){
        not_found();
    }
};
window.clone = function (obj) {
    return JSON.parse(JSON.stringify(obj));
};


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import ExampleComponent from './components/ExampleComponent.vue';
import UsersComponent from './components/users/UsersComponent.vue';
import IconComponent from './components/IconComponent.vue';
import router from './routes'

Vue.component('example-component', ExampleComponent);
Vue.component('users-component', UsersComponent);
Vue.component('app-icon', IconComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(router);

const app = new Vue({
    el: '#app',
    router,
});


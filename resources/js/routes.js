import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/users',
            component: require('./components/users/UsersComponent.vue').default,
        },
        {
            path: '/inicio',
            component: require('./components/ExampleComponent.vue').default,
        }
    ],
    mode: 'history'
});


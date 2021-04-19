import Vue from 'vue';
import Router from 'vue-router';
import User from './components/users/UsersComponent.vue';
import Inicio from './components/ExampleComponent.vue';
import Detail from './components/users/DetailComponent.vue';
import ErrorNotFound from './components/errors/NotFound.vue';

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
        },
        {
            path: '/detail/:id',
            component: Detail,
            props: true,
        },
        {
            path: '/404',
            component: ErrorNotFound,
        },
        {
            path: '*',
            redirect: '/404',
        }
    ],
});

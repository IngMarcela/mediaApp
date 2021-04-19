import Vue from 'vue';
import Router from 'vue-router';
import Users from './components/users/UsersComponent.vue';
import Inicio from './components/ExampleComponent.vue';
import Detail from './components/users/DetailComponent.vue';
import ErrorNotFound from './components/errors/NotFound.vue';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/inicio',
            component: require('./components/ExampleComponent.vue').default,
        },
        {
            path: '/users',
            component: Users,
            children: [
                {
                    path: '',
                    component: {
                        template: '<h2>Selecciona un usuario</h2>',

                    }
                },
                {
                    path: ':id',
                    component: Detail,
                    props: true
                }
            ]
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

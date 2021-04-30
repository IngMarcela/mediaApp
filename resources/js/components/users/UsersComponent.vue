<template>
    <div class="row p-4">
        <div class="col-xs-6 col-md-6">
            <div class="top">
                <h2>Usuarios</h2>
                <router-link :to="{ name: 'users.create' }">Nuevo usuario</router-link>
            </div>
            <ul class="list-group tasks">
                <app-user
                    v-for="(user) in users"
                    :key="user.id"
                    :user="user"
                    :users="users">
                </app-user>
            </ul>

            <p><a class="nav-link" @click="deleteCompleted" href="#">Eliminar los usuarios tachados</a></p>

        </div>
        <div class="col-xs-6 col-md-6">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    import UserComponent from './UserComponent.vue';
    import store from '../../store';
    export default {
        name: "UsersComponent",
        computed: {
            users: () => store.state.users
        },
        components: {
            'app-user' : UserComponent,
        },
        methods: {
            deleteCompleted() {
                store.deleteCompleteUsers();
            },
        },
    }
</script>

<style lang="scss">
    .top {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
    }
</style>

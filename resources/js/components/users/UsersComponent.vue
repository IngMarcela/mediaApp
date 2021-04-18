<template>
    <div>
        <ul class="list-group tasks">
            <app-user
                v-for="(user, index) in users"
                :key="user.id"
                :user="user"
                :index="index"
                :users="users"
                @remove="deleteUser">
            </app-user>
        </ul>

        <p><a class="nav-link" @click="deleteCompleted" href="#">Eliminar los usuarios tachados</a></p>

        <form @submit.prevent="createUser" class="new-task-form">
            <input v-model="new_user" type="text" class="form-control">
            <button class="btn btn-primary">Crear tarea</button>
        </form>
    </div>
</template>
<script>
    import UserComponent from './UserComponent.vue';
    import store from '../../store';
    export default {
        name: "UsersComponent",
        components: {
            'app-user' : UserComponent,
        },
        data() {
            return  {
                new_user: '',
                users: store.state.users,
            }
        },
        methods: {
            createUser() {
                this.users.push({
                    description: this.new_user,
                    pending: true,
                    editing: false,
                });
                this.new_user = '';
            },
            deleteCompleted() {
                this.users = this.users.filter(user => user.pending);
            },
            deleteUser(index) {
                this.users.splice(index, 1);
            }
        },
    }
</script>

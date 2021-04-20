<template>
    <div v-if="user">
        <h1>{{ user.title }}</h1>
        <p>{{ user.description }}</p>
        <div class="well">
            <button
                @click="toggleStatus"
                class="btn"
                :class="user.pending ? 'btn-default' : 'btn-primary'">
                <app-icon img="ok"></app-icon> Completar
            </button>
            <button class="btn btn-default">
                <app-icon img="edit"></app-icon> Editar
            </button>
            <button @click="deleteUser" class="btn btn-default">
                <app-icon img="trash"></app-icon> Eliminar
            </button>
        </div>
    </div>
</template>

<script>
    import store from '../../store';
    export default {
        name: "DetailComponent",
        props: ['id'],
        data() {
            return {
                user: null
            }
        },
        created() {
            this.findUser();
        },
        watch: {
            id: 'findUser'
        },
        methods: {
            findUser() {
                this.user = store.findUser(this.id);

                if(! this.user){
                    this.$router.push('/404');
                }
            },
            toggleStatus() {
                store.toggleStatus(this.user);
            },
            deleteUser() {
                store.deleteUser(this.id);

                this.$router.replace({ name: 'users' });
            }
        }
    }
</script>


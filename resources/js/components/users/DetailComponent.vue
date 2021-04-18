<template>
    <div>
        <h1>Detalle del usuario {{ user.title }}</h1>
        <p>{{ user.description }}</p>
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
            }
        }
    }
</script>


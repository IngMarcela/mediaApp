<template>
    <div v-if="user">
        <h1>{{ user.title }}</h1>
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

                if(! this.user){
                    this.$router.push('/404');
                }
            }
        }
    }
</script>


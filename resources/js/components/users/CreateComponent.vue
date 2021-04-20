<template>
    <div>
        <h2 class="subtitle">Nuevo usuario:</h2>

        <form @submit.prevent="create">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" v-model="user.title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <textarea id="description" cols="30" rows="6" v-model="user.description" row="6"
                          class="form-control"></textarea>
            </div>
            <button class="btn btn-primary">Crear usuario</button>
        </form>
    </div>

</template>

<script>
    import store from "../../store";

    export default {
        name: "CreateComponent",
        data() {
            return  {
                user: {
                    title: '',
                    description: '',
                }
            }
        },
        methods: {
            create() {
                store.createUser(this.user);
                this.$router.push({
                    name: 'users.detail',
                    params: {id: this.user.id},
                })
            },
        },
    }
</script>


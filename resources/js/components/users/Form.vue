<template>
    <div>
        <h2 class="subtitle">{{ title }}</h2>

        <form @submit.prevent="save">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" v-model="draft.title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <textarea id="description" cols="30" rows="6" v-model="draft.description" row="6"
                          class="form-control"></textarea>
            </div>
            <button class="btn btn-primary">{{action}}</button>
            <button @click="$router.push({ name: 'users'})" class="btn btn-link">Cancelar</button>
        </form>
    </div>

</template>

<script>
    export default {
        name: "Form",
        props: ['title', 'action', 'user'],
        data() {
            return {
                draft: clone(this.user)
            }
        },
        methods: {
            save() {
                this.$emit('save', this.draft);
            }
        },
    }
</script>

<style scoped>

</style>

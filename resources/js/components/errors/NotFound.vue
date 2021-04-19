<template>
    <div>
        <h2>Error 404: Pagina no encontrado</h2>

        <router-link :to="{ name : 'dashboard'}"> Regresar a la pagina principal</router-link>
    </div>
</template>

<script>
    export default {
        name: "NotFound"
    }
</script>

<style scoped>

</style>

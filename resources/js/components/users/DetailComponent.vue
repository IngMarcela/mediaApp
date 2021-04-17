<template>
    <div>
        <h1>Detalle del usuario {{ id }}</h1>
    </div>
</template>

<script>
    export default {
        name: "DetailComponent",
        props: ['id'],
    }
</script>

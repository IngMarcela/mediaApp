<template>
</template>
<script>
    export default {
        name: "UserComponent",
        props: ['users','user', 'index'],
        methods: {
            toggleStatus: function () {
                this.user.pending = !this.user.pending;
            },
            edit: function () {
                // permitir que solo se edite una sola vez
                this.users.forEach( function (user) {
                    user.editing = false;
                });
                this.draft = this.user.description;
                this.user.editing = true;
            },
            update: function () {
                this.user.description = this.draft;
                this.user.editing = false;
            },
            discard: function () {
                this.user.editing = false;
            },
            remove: function () {
                this.users.splice(this.index, 1)
            },
        }
    }
</script>


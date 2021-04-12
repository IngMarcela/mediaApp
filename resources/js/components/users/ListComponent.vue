<template>
</template>
<script>
    export default {
        name: "ListComponent",
        data: function() {
            return  {
                draft: '',
                new_user: '',
                users: [
                    {
                        description: 'Usuario A',
                        pending: true,
                        editing: false,
                    },
                    {
                        description: 'Usuario B',
                        pending: true,
                        editing: false,
                    },
                    {
                        description: 'Usuario C',
                        pending: false,
                        editing: false,
                    }
                ]
            }
        },
        methods: {
            createUser: function () {
                this.users.push({
                    description: this.new_user,
                    pending: true,
                    editing: false,
                });
                this.new_user = '';
            },
            toggleStatus: function (user) {
                user.pending = !user.pending;
            },
            editUser: function (user) {
                // permitir que solo se edite una sola vez
                this.users.forEach( function (user) {
                    user.editing = false;
                });
                this.draft = user.description;
                user.editing = true;
            },
            updateUser: function (user) {
                user.description = this.draft;
                user.editing = false;
            },
            discardUser: function (user) {
                user.editing = false;
            },
            deleteUser: function (index) {
                this.user.splice(index, 1)
            },
        },
    }
</script>

<template>
</template>
<script>
    export default {
        name: "ListComponent",
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
                user.editing = true;
            },
        },
        data: function() {
            return  {
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
                        editing: true,
                    },
                    {
                        description: 'Usuario C',
                        pending: false,
                        editing: false,
                    }
                ]
            }
        },
    }
</script>

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
                    },
                    {
                        description: 'Usuario B',
                        pending: true,
                    },
                    {
                        description: 'Usuario C',
                        pending: false,
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
            deleteCompleted: function () {
                this.users = this.users.filter(function (user) {
                    return user.pending;
                });
            },
        },
        created: function () {
            this.users.forEach(user => {
                this.$set(user, 'editing', false);
            });
            /*this.users.forEach(function (user) {
                this.$set(user, 'editing', false)
            }.bind(this));*/

        }
    }
</script>

<template>
</template>
<script>
    export default {
        name: "UserComponent",
        data: function () {
            return {
                editing: false,
                draft: '',
            }
        },
        props: ['users','user', 'index'],
        created: function() {
            EventBus.$on('editing', function (index) {
                if(this.index != index){
                    this.discard();
                }
            }.bind(this));
        },
        methods: {
            toggleStatus: function () {
                this.user.pending = !this.user.pending;
            },
            edit: function () {
                // permitir que solo se edite una sola vez
                /*this.users.forEach( function (user) {
                    user.editing = false;
                });*/
                EventBus.$emit('editing', this.index);
                this.draft = this.user.description;
                this.editing = true;
            },
            update: function () {
                this.user.description = this.draft;
                this.editing = false;
            },
            discard: function () {
                this.editing = false;
            },
            remove: function () {
                this.$emit('remove', this.index);
                //this.users.splice(this.index, 1)
            },
        }
    }
</script>


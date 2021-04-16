<template>
    <li
        class="list-group-item"
        :class="{editing: editing, completed: !user.pending}"
    >
        <a @click="toggleStatus" href="#">
            <app-icon :img="user.pending ? 'unchecked' : 'check'">
            </app-icon>
        </a>

        <template v-if="!editing">
            <span class="description">{{user.description}}</span>
            <div>
                <a @click="edit">
                    <app-icon img="edit"></app-icon>
                </a>
                <a @click="remove">
                    <app-icon img="trash"></app-icon>
                </a>
            </div>
        </template>

        <template v-else>
            <input type="text" v-model="draft">

            <div>
                <a @click="update">
                    <app-icon img="ok"></app-icon>
                </a>
                <a @click="discard">
                    <app-icon img="remove"></app-icon>
                </a>
            </div>
        </template>

    </li>
</template>
<script>
    import IconComponent from '../IconComponent.vue';
    export default {
        name: "UserComponent",
        data() {
            return {
                editing: false,
                draft: '',
            }
        },
        components: {
            'app-icon' : IconComponent,
        },
        props: ['users','user', 'index'],
        created() {
            EventBus.$on('editing', (index) => {
                if(this.index != index){
                    this.discard();
                }
            });
        },
        methods: {
            toggleStatus() {
                this.user.pending = !this.user.pending;
            },
            edit() {
                // permitir que solo se edite una sola vez
                /*this.users.forEach( function (user) {
                    user.editing = false;
                });*/
                EventBus.$emit('editing', this.index);
                this.draft = this.user.description;
                this.editing = true;
            },
            update() {
                this.user.description = this.draft;
                this.editing = false;
            },
            discard() {
                this.editing = false;
            },
            remove() {
                this.$emit('remove', this.index);
                //this.users.splice(this.index, 1)
            },
        }
    }
</script>


<template>
    <li @click="select"
        class="list-group-item"
        :class="{active: isActive, completed: !user.pending}"
    >
        <a @click.stop="toggleStatus" href="#">
            <app-icon :img="user.pending ? 'unchecked' : 'check'">
            </app-icon>
        </a>

        <span class="description">{{user.title}}</span>
    </li>
</template>
<script>
    import store from "../../store";
    export default {
        name: "UserComponent",
        data() {
            return {
                draft: '',
            }
        },
        props: ['user'],
        computed: {
            isActive(){
                return this.user.id == this.$route.params.id;
            }
        },
        methods: {
            select(){
                let route = this.isActive
                ? { name: 'users' }
                : { name: 'users.detail', params: {id: this.user.id}};

                this.$router.push(route);
            },
            toggleStatus() {
                store.toggleStatus(this.user);
            },
        }
    }
</script>


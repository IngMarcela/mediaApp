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
    import IconComponent from '../IconComponent.vue';
    export default {
        name: "UserComponent",
        data() {
            return {
                draft: '',
            }
        },
        components: {
            'app-icon' : IconComponent,
        },
        props: ['user'],
        computed: {
            isActive(){
                return this.user.id == this.$route.params.id;
            }
        },
        methods: {
            select(){
                this.$router.push(
                    this.isActive ? '/users' : '/users/'+this.user.id
                );
            },
            toggleStatus() {
                this.user.pending = !this.user.pending;
            },
        }
    }
</script>


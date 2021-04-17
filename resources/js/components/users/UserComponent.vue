<template>
    <li @click="select"
        class="list-group-item"
        :class="{completed: !user.pending}"
    >
        <a @click.stop="toggleStatus" href="#">
            <app-icon :img="user.pending ? 'unchecked' : 'check'">
            </app-icon>
        </a>

        <span class="description">{{user.description}}</span>


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
        props: ['user', 'index'],
        methods: {
            select(){
                this.$router.push('/detail/'+this.user.id);
            },
            toggleStatus() {
                this.user.pending = !this.user.pending;
            },
        }
    }
</script>


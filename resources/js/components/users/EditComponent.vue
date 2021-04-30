<script>
    import store from "../../store";
    import Form from "./Form.vue";
    export default {
        name: "EditComponent",
        props: ['id'],
        render(createElement){
            if (!this.user){
                return createElement('h2', 'Cargando...!');
            }
            return createElement(Form, {
                props: {
                    title: 'Editar Usuario',
                    action: 'Actualizar usuario',
                    user: this.user
                },
                on: {
                    save: (draft) => {
                        store.updateUser(this.id, draft);

                        this.$router.push({
                            name: 'users.detail',
                            params: {id: this.id},
                        })
                    }
                }
            });
        },
        created() {
            this.findUser();
        },
        data() {
            return {
                user: null,
            }
        },
        watch: {
            'id': 'findUser'
        },
        methods: {
            findUser() {
                setTimeout(() => {
                    this.user = clone(store.findUser(this.id));

                    not_found_unless(this.user);
                }, 2000);

            }
        }
    }
</script>

<style scoped>

</style>

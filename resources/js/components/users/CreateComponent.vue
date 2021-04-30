<script>
    import store from "../../store";
    import Form from "./Form.vue";

    export default {
        render(createElement) {
            let user = {
                id: '',
                title: '',
                description: '',
                pending: true,
            };
            return createElement(Form, {
                props: {
                    title: 'Crear Usuario',
                    action: 'Crear Usuario',
                    user: user,
                },
                on: {
                    save: (newUser) => {
                        store.createUser(newUser);
                        this.$router.push({
                            name: 'users.detail',
                            params: {id: newUser.id},
                        })
                    },
                }
            });
        },
    }
</script>


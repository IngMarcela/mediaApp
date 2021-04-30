import Vue from 'vue';
import users from './users.js';

let state = {
    users
}

new Vue({
    data: state
})


export default {
    state,
    findUser(id) {
        return this.state.users.find(user => user.id == id)
    },
    createUser(user) {
        user.id = this.state.users.length + 1;

        this.state.users.push(user);
    },
    toggleStatus(user) {
        user.pending = !user.pending;
    },
    deleteUser(id) {
        let index = this.state.users.findIndex(user => user.id == id);

        this.state.users.splice(index, 1);
    },
    updateUser(id, user) {
        let index = this.state.users.findIndex(user => user.id == id);

        this.state.users.splice(index, 1, user);
    },
    deleteCompleteUsers() {
        this.state.users = this.state.users.filter(user => user.pending);
    },
    }
;

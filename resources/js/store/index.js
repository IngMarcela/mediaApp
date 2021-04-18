let users = [
    {
        title: 'Usuario A',
        pending: true,
    },
    {
        title: 'Usuario B',
        pending: true,
    },
    {
        title: 'Usuario C',
        pending: false,
    }
];

users.forEach((user, index) => {
    user.description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum ' +
        'has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley' +
        ' of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also ' +
        'the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with ' +
        'the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing' +
        ' software like Aldus PageMaker including versions of Lorem Ipsum.';
    user.id = index + 1;
});

export default {
    state: {
        users
    },
    findUser(id) {
        return this.state.users.find(user => user.id == id)
    }
};

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuarios') }}</div>
                    <list-component inline-template>
                    <div class="card-body">
                        <div id="app" class="container">

                            <ul class="list-group tasks">
                                <li
                                    v-for="user in users"
                                    class="list-group-item"
                                    :class="{editing: user.editing, completed: !user.pending}">
                                    <a @click="toggleStatus(user)" href="#">
                                        <span class="glyphicon"
                                            :class="user.pending ? 'glyphicon-unchecked' : 'glyphicon-check'"
                                              aria-hidden="true">
                                        </span>
                                    </a>

                                    <template v-if="!user.editing">
                                        <span class="description">@{{user.description}}</span>
                                        <div>
                                            <a @click="editUser(user)">
                                            <span class="glyphicon glyphicon-edit"
                                                  aria-hidden="true">
                                            </span>
                                            </a>
                                            <a href="#">
                                            <span class="glyphicon glyphicon-trash"
                                                  aria-hidden="true">
                                            </span>
                                            </a>
                                        </div>
                                    </template>

                                    <template v-else>
                                        <input type="text" v-model="user.description">

                                        <div>
                                            <a href="#">
                                            <span class="glyphicon glyphicon-ok"
                                                  aria-hidden="true">
                                            </span>
                                            </a>
                                            <a href="#">
                                            <span class="glyphicon glyphicon-remove"
                                                  aria-hidden="true">
                                            </span>
                                            </a>
                                        </div>
                                    </template>

                                </li>
                            </ul>

                            <form @submit.prevent="createUser" class="new-task-form">
                                <input v-model="new_user" type="text" class="form-control">
                                <button class="btn btn-primary">Crear tarea</button>
                            </form>
                    </div>
                        </list-component>
                </div>
            </div>
        </div>
    </div>
@endsection

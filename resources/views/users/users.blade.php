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
                                <app-user
                                    v-for="(user, index) in users"
                                    :user="user"
                                    :index="index"
                                    :users="users"
                                    inline-template>
                                    <li
                                        class="list-group-item"
                                        :class="{editing: user.editing, completed: !user.pending}">
                                        <a @click="toggleStatus" href="#">
                                            <app-icon :img="user.pending ? 'unchecked' : 'check'">
                                            </app-icon>
                                        </a>

                                        <template v-if="!user.editing">
                                            <span class="description">@{{user.description}}</span>
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

                                </app-user>



                            </ul>

                            <p><a class="nav-link" @click="deleteCompleted" href="#">Eliminar los usuarios tachados</a></p>

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

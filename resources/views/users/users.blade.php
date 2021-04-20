@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Usuarios') }}</div>
                    <div class="card-body">
                        <div id="app" class="container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="{ name: 'dashboard'}" active-class="active">Dashboard</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="{ name: 'users'}" active-class="active">Usuarios</router-link>
                                </li>
                            </ul>

                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

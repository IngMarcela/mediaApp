@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuarios') }}</div>
                    <div class="card-body">
                        <div id="app" class="container">

                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <router-link class="nav-link" active-class="active" to="/users">Usuarios</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" active-class="active" to="/inicio">prueba</router-link>
                                </li>
                            </ul>

                            <keep-alive>
                                <router-view></router-view>
                            </keep-alive>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

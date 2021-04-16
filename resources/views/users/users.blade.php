@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuarios') }}</div>
                    <div class="card-body">
                        <div id="app" class="container">
                            <router-link to="/users">Usuarios</router-link>
                            <router-link to="/inicio">prueba</router-link>
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

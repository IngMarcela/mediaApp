@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuarios') }}</div>

                    <div class="card-body">
                        <div id="app" class="container">

                            <ul class="list-group tasks">
                                <li class="list-group-item">
                                    <a href="#">
                                        <span class="glyphicon glyphicon-unchecked"
                                              aria-hidden="true">
                                        </span>
                                    </a>
                                    <span class="description">Medicamento A</span>
                                    <div>
                                        <a href="#">
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
                                </li>
                                <li class="list-group-item editing">
                                    <a href="#">
                                        <span
                                            class="glyphicon glyphicon-unchecked"
                                            aria-hidden="true">
                                        </span>
                                    </a>
                                    <input type="text" value="Medicamento B">
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
                                </li>
                                <li class="list-group-item completed">
                                    <a href="#">
                                        <span class="glyphicon glyphicon-check"
                                              aria-hidden="true">
                                        </span>
                                    </a>
                                    <span class="description">Medicamento C</span>

                                    <div>
                                        <a href="#">
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
                                </li>
                            </ul>

                            <form class="new-task-form">
                                <input type="text" class="form-control">
                                <button class="btn btn-primary">Crear tarea</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

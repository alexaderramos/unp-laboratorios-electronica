@extends('layouts.template')

@section('breadcrumb')
    @component('layouts.components.breadcrumb')
        @slot('currentPage','Roles')
    @endcomponent
@endsection

@section('content')
    <div class="section">
        <div class="card">
            <div class="card-content">
                <p class="caption mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aspernatur atque commodi cupiditate distinctio dolorem eaque eius eos facilis labore laudantium necessitatibus nisi nulla odio, porro, quidem rem sequi!
                </p>
            </div>
        </div>
    </div><!-- START RIGHT SIDEBAR NAV -->

    <div class="row">
        <div class="col s12 m12 l12">
            <div id="bordered-table" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Roles del Sistema</h4>
                    <div class="row">
                        <div class="col s12">
                        </div>
                        <div class="col s12">
                            <table class="highlight centered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Descripción</th>
                                        <th>Identificador</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>{{$role->name}}</td>
                                    <td><a href="{{route('roles.edit',$role)}}" class="btn-flat waves-effect red-text"><i class="material-icons">settings</i></a></td>
                                    <td><a href="{{route('roles.edit',$role)}}" class="btn-flat waves-effect red-text"><i class="material-icons">clear</i></a></td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

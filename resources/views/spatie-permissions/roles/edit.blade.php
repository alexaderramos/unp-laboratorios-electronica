@extends('layouts.template')

@section('custom-meta')
    <meta name="role-id" content="{{ $role->id }}">
@endsection

@section('breadcrumb')
    @component('layouts.components.breadcrumb')
        @slot('currentPage','Editar Rol')
        @slot('labels',
               [
                   ['Roles','roles.index']
               ])
    @endcomponent
@endsection

@section('content')
    <role-update-component></role-update-component>
@endsection


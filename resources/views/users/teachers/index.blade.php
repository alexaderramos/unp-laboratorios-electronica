@extends('layouts.template')

@section('breadcrumb')
    @component('layouts.components.breadcrumb')
        @slot('currentPage','Maestros')
        @slot('labels',
               [
                   ['Usuarios','users.index']
               ])
    @endcomponent
@endsection

@section('content')
    <div class="section">
        <div class="card">
            <div class="card-content">

            </div>
        </div>
    </div><!-- START RIGHT SIDEBAR NAV -->

@endsection

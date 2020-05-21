@extends('layouts.template')

@section('breadcrumb')

    @component('layouts.components.breadcrumb')
        @slot('currentPage','Usuarios')

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

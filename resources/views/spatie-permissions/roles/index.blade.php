@extends('layouts.template')

@section('breadcrumb')
    @component('layouts.components.breadcrumb')
        @slot('currentPage','Roles')
    @endcomponent
@endsection

@section('content')

    <div class="card">
        <div class="card-content">
            <p class="caption mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aspernatur atque commodi cupiditate distinctio dolorem eaque eius eos facilis labore laudantium necessitatibus nisi nulla odio, porro, quidem rem sequi!
            </p>
        </div>
    </div>

    <role-index-component></role-index-component>

@endsection

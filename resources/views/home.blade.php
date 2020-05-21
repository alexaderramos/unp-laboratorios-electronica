@extends('layouts.template')

@section('breadcrumb')
    @component('layouts.components.breadcrumb')
        @slot('currentPage','Home')
    @endcomponent
@endsection

@section('content')
        <div class="section">
            <div class="card">
                <div class="card-content">
                    <p class="caption mb-0">
                        Estas logeado <i class="ion ion-heart"></i>
                    </p>
                    <button type="button"
                            class="btn waves-effect waves-light light-blue accent-3 animated infinite rubberBand mt-2 mb-2">Infinite
                        rubberBand</button>
                </div>
            </div>
        </div><!-- START RIGHT SIDEBAR NAV -->

@endsection

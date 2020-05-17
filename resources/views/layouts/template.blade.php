<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{asset('js/app.js')}}" defer></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
            <div class="nav-wrapper">
                @include('layouts.components.nav-wrapper')
            </div>
        </nav>
    </div>
</header>
<!-- END: Header-->

<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        @include('layouts.components.sidenav-items')
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    @yield('breadcrumb')
                    <div class="col s2 m6 l6"><a class="btn btn-floating dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons">expand_more            </i><i class="material-icons right">arrow_drop_down</i></a>
                        <ul class="dropdown-content" id="dropdown1" tabindex="0">
                            <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                            <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container animated fadeIn" id="app">
                @yield('content')
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
<!-- END: Page Main-->

<!-- BEGIN: Footer-->
<footer class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container"><span>&copy; {{\Carbon\Carbon::now()->year}} <a href="{{url('/')}}" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://github.com/alexaderramos">Alexander R.</a></span></div>
    </div>
</footer>

</body>


</html>

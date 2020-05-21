<li class="navigation-header"><a class="navigation-header-text">Principal</a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>
<li class="{{Route::is('home')?'active':''}} bold">
    <a class="waves-effect waves-cyan {{Route::is('home')?'active':''}}" href="{{route('home')}}">
        <i class="material-icons">home</i><span class="menu-title" >Home</span>
    </a>
</li>

<li class="navigation-header"><a class="navigation-header-text">Administrador </a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>
<li class="{{Route::is('users.*')?'active':''}} bold">
    <a class="collapsible-header waves-effect waves-cyan {{Route::is('users.*')?'active':''}} " href="JavaScript:void(0)">
        <i class="material-icons">face</i>
        <span class="menu-title">Usuarios</span>
    </a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">

            <li class=""><a class="" href="{{route('users.index')}}">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span >Administradores</span></a>
            </li>
            <li class=""><a class="" href="{{route('users.index')}}">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span >Secretaría</span></a>
            </li>
            <li class=""><a class="" href="{{route('users.index')}}">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span >Maestros</span></a>
            </li>

        </ul>
    </div>
</li>

<li class="{{Route::is('roles.*') || Route::is('permissions.*')?'active':''}} bold">
    <a class="collapsible-header waves-effect waves-cyan {{Route::is('roles.*') || Route::is('permissions.*')?'active':''}} " href="JavaScript:void(0)">
        <i class="material-icons">security</i>
        <span class="menu-title">Seguridad</span>
    </a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">

            <li class=""><a class="" href="{{route('roles.index')}}">
                    <i class="material-icons">radio_button_{{!Route::is('roles.index')?'un':''}}checked</i>
                    <span>Roles</span></a>
            </li>
            <li class=""><a class="" href="{{route('permissions.index')}}">
                    <i class="material-icons">radio_button_{{!Route::is('permissions.index')?'un':''}}checked</i>
                    <span >Permisos</span></a>
            </li>

        </ul>
    </div>
</li>

<li class="navigation-header"><a class="navigation-header-text">ESTUDIANTES </a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>
<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
        <i class="material-icons">content_paste</i>
        <span class="menu-title" data-i18n="Pages">Cursos</span></a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">

            <li class=""><a class="" href="page-blank.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Page Blank">Page Blank</span></a>
            </li>
        </ul>
    </div>
</li>
<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
        <i class="material-icons">content_paste</i>
        <span class="menu-title" data-i18n="Pages">Notas</span></a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">

            <li class=""><a class="" href="page-blank.html">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Page Blank">Page Blank</span></a>
            </li>
        </ul>
    </div>
</li>

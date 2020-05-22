<ul class="navbar-list right">

    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">2</small></i></a></li>
    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
</ul>

<!-- notifications-dropdown-->
<ul class="dropdown-content" id="notifications-dropdown">
    <li>
        <h6>NOTIFICATIONS<span class="new badge">2</span></h6>
    </li>
    <li class="divider"></li>
    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
    </li>
    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
    </li>
</ul>
<!-- profile-dropdown-->
<ul class="dropdown-content" id="profile-dropdown">
    <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
    <li class="divider"></li>
    <li><a class="grey-text text-darken-1"  href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
            <i class="material-icons">keyboard_tab</i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>

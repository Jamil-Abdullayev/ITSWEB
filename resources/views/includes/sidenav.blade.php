<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark gradient-45deg-deep-purple-blue sidenav-gradient sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="#">
                <img class="hide-on-med-and-down" src="../../../app-assets/images/logo/itsweb-logo.png" alt="itsweb logo" />
                <img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="itsweb logo" />
                <span class="logo-text hide-on-med-and-down">ITsWEB CMS</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

        <li class="navigation-header"><a class="navigation-header-text">Menu</a><i class="navigation-header-icon material-icons">more_horiz</i></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="user-profile-page.html"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">User Profile</span></a></li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">view_list</i><span class="menu-title" data-i18n="Pages">General Content</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{route('benefits-view')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Our Benefits</span></a></li>
                    <li><a href="{{route('work-principles-view')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Work Principles</span></a></li>
                    <li><a href="{{route('same-type-content',['keyword' => 'privacy'])}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Privacy Policy</span></a></li>
                    <li><a href="{{route('same-type-content',['keyword' => 'cookies'])}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Cookies Policy</span></a></li>
                    <li><a href="{{route('same-type-content',['keyword' => 'terms'])}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Terms of Services</span></a></li>

                </ul>
            </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings</i><span class="menu-title" data-i18n="Pages">Site Settings</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="{{route('site-main-settings')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Main Settings</span></a></li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('users.index')}}"><i class="material-icons">face</i><span class="menu-title" data-i18n="Pages">Users</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('blogs.index')}}"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Pages">Blog/News</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">home</i><span class="menu-title" data-i18n="Pages">Main Page Settings</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">comment</i><span class="menu-title" data-i18n="Pages">Comments</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">lightbulb_outline</i><span class="menu-title" data-i18n="Pages">Services</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">info_outline</i><span class="menu-title" data-i18n="Pages">About Page</span></a></li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">question_answer</i><span class="menu-title" data-i18n="Pages">FAQ</span></a></li>



    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->

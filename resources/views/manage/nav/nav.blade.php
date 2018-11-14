<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt=""/></a>
            <strong><a href="index.html"><img src="{{asset('admin/img/logo/logosn.png')}}" alt=""/></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">

                    <li>
                        <a title="Landing Page" href="#" class="{{Nav::isRoute('manage.dashboard')}}" aria-expanded="false"><span
                                    class="educate-icon educate-home icon-wrap"
                                    aria-hidden="true"></span>
                            <span class="mini-click-non">Dashboard</span></a>
                    </li>
                    <li>
                        <a title="Landing Page" href="#" aria-expanded="false"><span
                                    class="educate-icon educate-data-table icon-wrap"
                                    aria-hidden="true"></span>
                            <span class="mini-click-non">Blog Posts</span></a>
                    </li>
                    <li>
                        <a title="Landing Page" href="{{route('users.index')}}" aria-expanded="false"><span
                                    class="educate-icon educate-apps icon-wrap {{Nav::isResource('users')}}"
                                    aria-hidden="true"></span>
                            <span class="mini-click-non">Manage Users</span></a>
                    </li>
                    <li>
                        <a title="Landing Page" href="#" aria-expanded="false"><span
                                    class="educate-icon educate-event icon-wrap sub-icon-mg"
                                    aria-hidden="true"></span>
                            <span class="mini-click-non">Events</span></a>
                    </li>
                    <li>
                        <a title="Landing Page" href="" aria-expanded="false"><span
                                    class="educate-icon educate-course icon-wrap"
                                    aria-hidden="true"></span>
                            <span class="mini-click-non">Photos</span></a>
                    </li>

                    <li>
                        <a class="has-arrow {{Nav::hasSegment(['roles','permissions'], 2)}}"  aria-expanded="false"><span
                                    class="educate-icon educate-library icon-wrap "></span>
                            <span class="mini-click-non">Roles&amp;Permissions</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" class="{{Nav::isResource('roles')}}" href="{{route('roles.index')}}"><span
                                            class="mini-sub-pro">Roles</span></a></li>
                            <li><a title="Add Students" class="{{Nav::isResource('permissions')
                                            }}" href="{{route('permissions.index')}}"><span
                                            class="mini-sub-pro ">Permissions</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">

                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button"
                                                   aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="{{asset('admin/img/product/pro4.jpg')}}" alt=""/>
                                                    <span class="admin-name">Prof.Anderson</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu"
                                                    class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="#"><span
                                                                    class="edu-icon edu-home-admin author-log-ic"></span>My
                                                            Account</a>
                                                    </li>
                                                    <li><a href="#"><span
                                                                    class="edu-icon edu-user-rounded author-log-ic"></span>My
                                                            Profile</a>
                                                    </li>
                                                    <li><a href="#"><span
                                                                    class="edu-icon edu-money author-log-ic"></span>User
                                                            Billing</a>
                                                    </li>
                                                    <li><a href="#"><span
                                                                    class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                    </li>
                                                    <li><a href="#"><span
                                                                    class="edu-icon edu-locked author-log-ic"></span>Log
                                                            Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">

                                    <li><a href="events.html">DashBoard</a></li>
                                    <li><a href="events.html">Blog Posts</a></li>
                                    <li><a href="events.html">Manage Users</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="events.html">Photos</a></li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Roles &amp;
                                            Permissions
                                            <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="all-professors.html">Roles</a>
                                            </li>
                                            <li><a href="add-professor.html">Permissions</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..."
                                                   class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Text Editor</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
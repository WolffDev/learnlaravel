<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #4 | Blank Page Layout</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #4 for blank page layout" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href=".{{asset('css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    @yield('css-content')
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN PAGE TOP -->
            <div class="page-top">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="../assets/layouts/layout4/img/logo-light.png" alt="logo" class="logo-default" />
                    </a>
                </div>
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler pull-left" data-toggle="collapse" data-target=".navbar-collapse"></a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- END LOGO -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu pull-right">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username"> Nick </span>
                                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                <img alt="" class="img-circle" src="../assets/layouts/layout4/img/avatar9.jpg" /> </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="app_inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app_todo_2.html">
                                        <i class="icon-rocket"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="page_user_lock_1.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-offcanvas row-offcanvas-left">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper sidebar-offcanvas">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item start {{ isActiveURL('/admin', 'active') }}">
                        <a href="{{ route('page.admin') }}" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Oversigt</span>
                        </a>
                    </li>
                    {{--<li class="heading">--}}
                        {{--<h3 class="uppercase">Features</h3>--}}
                    {{--</li>--}}
                    <li class="nav-item {{ isActiveURL('/admin/users', 'active open') }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Medlemmer</span>
                            <span class="arrow {{ isActiveURL('/admin/users', ' open') }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {{ isActiveURL('/admin/users', 'active') }}">
                                <a href="{{ route('users.index') }}" class="nav-link ">
                                    <span class="title">Alle Medlemmer</span>
                                </a>
                            </li>
                            <li class="nav-item {{ isActiveURL('/admin/users/create', 'active') }}">
                                <a href="" class="nav-link ">
                                    <span class="title">Tilføj Medlem</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="" class="nav-link ">
                                    <span class="title">Nye Medlemmer</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    @yield('page-title')
                    <!-- END PAGE TITLE -->
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="note note-info">
                    @yield('content')
                </div>
                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN QUICK NAV -->
    {{--<nav class="quick-nav">--}}
        {{--<a class="quick-nav-trigger" href="#0">--}}
            {{--<span aria-hidden="true"></span>--}}
        {{--</a>--}}
        {{--<ul>--}}
            {{--<li>--}}
                {{--<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">--}}
                    {{--<span>Purchase Metronic</span>--}}
                    {{--<i class="icon-basket"></i>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">--}}
                    {{--<span>Customer Reviews</span>--}}
                    {{--<i class="icon-users"></i>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="http://keenthemes.com/showcast/" target="_blank">--}}
                    {{--<span>Showcase</span>--}}
                    {{--<i class="icon-user"></i>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">--}}
                    {{--<span>Changelog</span>--}}
                    {{--<i class="icon-graph"></i>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{--<span aria-hidden="true" class="quick-nav-bg"></span>--}}
    {{--</nav>--}}
    {{--<div class="quick-nav-overlay"></div>--}}
    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <script src="{{asset('js/ie8.fix.min.js')}}"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
{{--    <script src="{{asset('js/js.cookie.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>--}}
    <script src="{{asset('js/jquery.blockui.min.js')}}" type="text/javascript"></script>
{{--    <script src="{{asset('js/bootstrap-switch.min.js')}}" type="text/javascript"></script>--}}
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{asset('js/app.min.js')}}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/demo.min.js')}}" type="text/javascript"></script>
{{--    <script src="{{asset('js/quick-sidebar.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('js/quick-nav.min.js')}}" type="text/javascript"></script>--}}
    @yield('js-content')
    @stack('scripts')
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
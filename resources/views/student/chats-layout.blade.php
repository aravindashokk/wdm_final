<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-chat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-chat-list.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                                <li>jdnejde</li>
                </ul>
                

            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
               
                @role('admin')
                <a href="{{ route('admin') }}" class="brand-text">Admin Account</a>
            @endrole
            @role('businessowner')
                <a href="{{ route('businessowner') }}" class="brand-text">Business Account</a>
            @endrole
            @role('student')
                <a href="{{ route('student') }}" class="brand-text">Student Account</a>
            @endrole
            @role('schooladmin')
                <a href="{{ route('schooladmin') }}" class="brand-text">School Account</a>
            @endrole
                
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{ Auth::user()->name }}</span><span
                                class="user-status"></span></div><span class="avatar">
                            @if (Auth::user()->avatar == null)
                                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="avatar"
                                    width="40" height="40">
                            @else
                                <img class="round" src="{{ asset('storage/avatars/' . Auth::user()->avatar) }}"
                                    alt="avatar" height="40" width="40">
                            @endif
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <div class="dropdown-divider"></div>
                        @role('schooladmin')
                            <a class="dropdown-item" href="{{ route('schooladmin.profile') }}"><i class="me-50"
                                    data-feather="settings"></i>
                                Settings</a>
                            <a class="dropdown-item" href="{{ route('schooladmin.allchats') }}"><i class="me-50"
                                    data-feather="message-square"></i> Chats</a>
                        @endrole
                        @role('admin')
                            <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="me-50"
                                    data-feather="settings"></i>
                                Settings</a>
                            <a class="dropdown-item" href="{{ route('admin.allchats') }}"><i class="me-50"
                                    data-feather="message-square"></i> Chats</a>
                        @endrole
                        @role('businessowner')
                            <a class="dropdown-item" href="{{ route('businessowner.profile') }}"><i class="me-50"
                                    data-feather="settings"></i>
                                Settings</a>
                            <a class="dropdown-item" href="{{ route('businessowner.allchats') }}"><i class="me-50"
                                    data-feather="message-square"></i> Chats</a>
                        @endrole
                        @role('student')
                            <a class="dropdown-item" href="{{ route('student.profile') }}"><i class="me-50"
                                    data-feather="settings"></i>
                                Settings</a>
                        @endrole
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="me-50" data-feather="power"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    {{-- @include('layouts.menu') --}}

    <!-- BEGIN: Content-->
    <div class="app-content content chat-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @livewire('chat.student.student-main-chat')
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/app-chat.js') }}"></script>
    <!-- END: Page JS-->
    @livewireScripts
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    @stack('scripts')
</body>
<!-- END: Body-->

</html>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content=" web app">
    <meta name="author" content="WorldIn">
    <title>Admin Dashboard - WordIn Writers</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ url('admin/all-notifications') }}" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="All Notifications"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('admin/conversations') }}"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('admin/all-orders') }}"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon"
                                data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ url('admin/orders-in-progress') }}" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Todo"><i class="ficon"
                                data-feather="check-square"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle"
                        id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                            class="selected-language">English</span></a>
                    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a
                            class="dropdown-item" href="#" data-language="en"><i
                                class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item"
                            href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a
                            class="dropdown-item" href="#" data-language="de"><i
                                class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#"
                            data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div> --}}
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore WordIn Writers..."
                            tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                @php
                    $notifications = App\Models\OrderNotification::where('receiver_id', Auth::user()->id)->get();
                    $takenotifications = App\Models\OrderNotification::where('receiver_id', Auth::user()->id)
                        ->whereNull('read_at')
                        ->orderBy('created_at', 'DESC')
                        ->take(5)
                        ->get();
                    $takecomplains = App\Models\ClientComplain::whereNull('admin_response')
                        ->orderBy('created_at', 'DESC')
                        ->take(4)
                        ->get();
                    $complains = App\Models\ClientComplain::whereNull('admin_response')->get();
                    $suggestions = App\Models\Suggestion::whereNull('admin_response')->get();
                    $takesuggestions = App\Models\Suggestion::whereNull('admin_response')
                        ->orderBy('created_at', 'DESC')
                        ->take(4)
                        ->get();
                @endphp
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge rounded-pill bg-danger badge-up">{{ count($notifications) + count($suggestions) + count($complains) }}</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Payment Notifications</h4>

                                <div class="badge rounded-pill badge-light-primary">{{ count($notifications) }} New
                                </div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            @forelse ($takenotifications as $notification)
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar">
                                                @if ($notification->notificationuser->avatar == null)
                                                    <img src="https://ui-avatars.com/api/?name={{ $notification->notificationuser->name }}"
                                                        alt="avatar" width="32" height="32">
                                                @else
                                                    <img src="{{ asset('storage/avatars/' . $notification->notificationuser->avatar) }}"
                                                        alt="avatar" width="32" height="32">
                                                @endif

                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span
                                                    class="fw-bolder">{{ $notification->notificationuser->name }} has
                                                    paid {{ $notification->notificationorder->order_cost }} USD
                                                    🎉</span>!</p><small class="notification-text">
                                                {{ $notification->data }}.</small>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar"><img
                                                    src="{{ asset('app-assets/images/portrait/small/avatar-s-15.jpg') }}"
                                                    alt="avatar" width="32" height="32"></div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <p class="media-heading"><span class="fw-bolder">No New Payments received
                                            </p><small class="notification-text"> But You may have orders to deliver
                                                soon</small>
                                        </div>
                                    </div>
                                </a>
                            @endforelse
                        </li>
                        <li class="scrollable-container media-list">
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">Suggestions</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div>
                            @forelse ($suggestions as $suggestion)
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content"><i class="avatar-icon"
                                                        data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <small class="notification-text">
                                                {!! $suggestion->suggestion !!}
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content"><i class="avatar-icon"
                                                        data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <small class="notification-text">No suggestions unanswered suggestions as
                                                at now.</small>
                                        </div>
                                    </div>
                                </a>
                            @endforelse

                        </li>
                        <li class="scrollable-container media-list">
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">Complains</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div>
                            @forelse ($complains as $complain)
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content"><i class="avatar-icon"
                                                        data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <small class="notification-text">
                                                {!! $complain->complain !!}
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <a class="d-flex" href="#">
                                    <div class="list-item d-flex align-items-start">
                                        <div class="me-1">
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content"><i class="avatar-icon"
                                                        data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item-body flex-grow-1">
                                            <small class="notification-text">No complains unanswered suggestions as at
                                                now.</small>
                                        </div>
                                    </div>
                                </a>
                            @endforelse

                        </li>

                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100"
                                href="{{ url('admin/all-notifications') }}">Read all
                                notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{ Auth::user()->name }}</span><span
                                class="user-status">Admin</span></div><span class="avatar">
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
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="{{ url('admin/account-settings') }}"><i class="me-50"
                                data-feather="user"></i> Profile</a><a class="dropdown-item"
                            href="{{ url('admin/complains') }}"><i class="me-50" data-feather="mail"></i>
                            Complains</a><a class="dropdown-item" href="{{ url('admin/conversations') }}"><i
                                class="me-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="{{ url('admin/account-settings') }}"><i class="me-50"
                                data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="{{ url('admin/suggestions') }}"><i
                                class="me-50" data-feather="credit-card"></i> Suggestions</a>
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



    @include('layouts.menu')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
                2022<a class="ms-25" href="#" target="_blank">EssayProwessWriters</a><span
                    class="d-none d-sm-inline-block">, All rights
                    Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i
                    data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->

    <script src="{{ asset('app-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
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
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
<!-- END: Body-->

</html>

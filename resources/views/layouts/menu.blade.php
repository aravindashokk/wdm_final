<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                @role('admin')
                    <a class="navbar-brand" href="{{ route('admin') }}">
                    @endrole
                    @role('businessowner')
                        <a class="navbar-brand" href="{{ route('businessowner') }}">
                        @endrole
                        @role('student')
                            <a class="navbar-brand" href="{{ route('student') }}">
                            @endrole
                            @role('schooladmin')
                                <a class="navbar-brand" href="{{ route('schooladmin') }}">
                                @endrole
                                <span class="brand-logo">
                                    <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                        <defs>
                                            <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%"
                                                x2="50%" y2="89.4879456%">
                                                <stop stop-color="#000000" offset="0%"></stop>
                                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                                            </lineargradient>
                                            <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                                x2="37.373316%" y2="100%">
                                                <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                                            </lineargradient>
                                        </defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                                <g id="Group" transform="translate(400.000000, 178.000000)">
                                                    <path class="text-primary" id="Path"
                                                        d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                        style="fill:currentColor"></path>
                                                    <path id="Path1"
                                                        d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                        fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                    <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                        points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                                    </polygon>
                                                    <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                        points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                                    </polygon>
                                                    <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                        opacity="0.099999994"
                                                        points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                                    </polygon>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></span>

                                @role('admin')
                                    <h2 class="brand-text">Admin Account</h2>
                                @endrole
                                @role('businessowner')
                                    <h2 class="brand-text">Business Account</h2>
                                @endrole
                                @role('student')
                                    <h2 class="brand-text">Student Account</h2>
                                @endrole
                                @role('schooladmin')
                                    <h2 class="brand-text">School Account</h2>
                                @endrole
                            </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @role('admin')
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin') }}"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span></a>
                    <ul class="menu-content">

                        <li class="active"><a class="d-flex align-items-center" href="{{ route('admin') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Admin Dashboard">Dashboard</span></a>
                        </li>
                    </ul>
                </li>
            @endrole
            @role('admin')
                @permission('manage-schools')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.addschool') }}"><i
                                data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Create New
                                School</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.manageschools') }}"><i
                                data-feather="message-square"></i><span class="menu-title text-truncate"
                                data-i18n="Chat">Manage
                                Schools</span></a>
                    </li>
                @endpermission
                @permission('manage-business')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.addbusiness') }}"><i
                                data-feather="check-square"></i><span class="menu-title text-truncate"
                                data-i18n="Todo">Onboard Business</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.managebusiness') }}"><i
                                data-feather="calendar"></i><span class="menu-title text-truncate"
                                data-i18n="Calendar">Manage Businesses</span></a>
                    </li>
                @endpermission
                @permission('manage-students')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.addstudent') }}"><i
                                data-feather="check-square"></i><span class="menu-title text-truncate"
                                data-i18n="Todo">Onboard Student</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.managestudents') }}"><i
                                data-feather="calendar"></i><span class="menu-title text-truncate"
                                data-i18n="Calendar">Manage Students</span></a>
                    </li>
                @endpermission
                @permission('manage-chats')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ url('admin/orders') }}"><i
                                data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Kanban">All
                                Chats</span></a>

                    </li>
                @endpermission
                <li class=" nav-item"><a class="d-flex align-items-center"
                        href="{{ url('admin/roles/permissions') }}"><i data-feather="shield"></i><span
                            class="menu-title text-truncate" data-i18n="Roles">All
                            Roles</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.allchats') }}"><i
                            data-feather="message-square"></i><span class="menu-title text-truncate"
                            data-i18n="Roles">All
                            Chats</span></a>
                </li>
            @endrole

            @role('businessowner')
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('businessowner') }}"><i
                            data-feather="square"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center"
                        href="{{ route('businessowner.myproducts') }}"><i data-feather="square"></i><span
                            class="menu-title text-truncate" data-i18n="Modal Examples">My Products</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center"
                        href="{{ route('businessowner.addproduct') }}"><i data-feather="eye-off"></i><span
                            class="menu-title text-truncate" data-i18n="Disabled Menu">Add Product</span></a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center"
                        href="{{ route('businessowner.allchats') }}"><i data-feather="message-square"></i><span
                            class="menu-title text-truncate" data-i18n="Roles">All
                            Chats</span></a>
                </li>
            @endrole
            @role('student')
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('student') }}"><i
                            data-feather="square"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('student.allproducts') }}"><i
                            data-feather="list"></i><span class="menu-title text-truncate" data-i18n="Modal Examples">All
                            Products</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('student.mycart') }}"><i
                            data-feather="shopping-cart"></i><span class="menu-title text-truncate"
                            data-i18n="Disabled Menu">My Cart</span></a>
                </li>
            @endrole
            @role('schooladmin')
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin') }}"><i
                            data-feather="square"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin') }}"><i
                            data-feather="square"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">All Students</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin') }}"><i
                            data-feather="circle"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Chats</span></a>
                </li>
            @endrole







            {{-- @endrole --}}
            {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="maps-leaflet.html"><i
                        data-feather="map"></i><span class="menu-title text-truncate"
                        data-i18n="Leaflet Maps">Leaflet Maps</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Misc">Misc</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="menu"></i><span class="menu-title text-truncate"
                        data-i18n="Menu Levels">Menu Levels</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Second Level">Second Level
                                2.1</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Second Level">Second Level
                                2.2</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="#"><span
                                        class="menu-item text-truncate" data-i18n="Third Level">Third Level
                                        3.1</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="#"><span
                                        class="menu-item text-truncate" data-i18n="Third Level">Third Level
                                        3.2</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="disabled nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="eye-off"></i><span class="menu-title text-truncate"
                        data-i18n="Disabled Menu">Disabled Menu</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center"
                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                    target="_blank"><i data-feather="folder"></i><span class="menu-title text-truncate"
                        data-i18n="Documentation">Documentation</span></a>
            </li><i data-feather='message-square'></i>
            <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.ticksy.com/"
                    target="_blank"><i data-feather="life-buoy"></i><span class="menu-title text-truncate"
                        data-i18n="Raise Support">Raise Support</span></a>
            </li> --}}
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

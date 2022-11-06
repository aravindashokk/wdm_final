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
                                data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Manage
                                Schools</span></a>
                    </li>
                @endpermission
                @permission('manage-business')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.addbusiness') }}"><i
                                data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Onboard
                                Business</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.managebusiness') }}"><i
                                data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Manage
                                Businesses</span></a>
                    </li>
                @endpermission
                @permission('manage-students')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.addstudent') }}"><i
                                data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Onboard
                                Student</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.managestudents') }}"><i
                                data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Manage
                                Students</span></a>
                    </li>
                @endpermission
                @permission('manage-chats')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ url('admin/orders') }}"><i
                                data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Kanban">All
                                Chats</span></a>

                    </li>
                @endpermission
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ url('admin/roles/permissions') }}"><i
                            data-feather="shield"></i><span class="menu-title text-truncate" data-i18n="Roles">All
                            Roles</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.allchats') }}"><i
                            data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Roles">All
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
                <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('businessowner.adverts') }}"><i
                            data-feather="upload"></i><span class="menu-title text-truncate"
                            data-i18n="Disabled Menu">Post Advert</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center"
                        href="{{ route('businessowner.myadverts') }}"><i data-feather="folder-minus"></i><span
                            class="menu-title text-truncate" data-i18n="Disabled Menu">My Adverts</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center"
                        href="{{ route('businessowner.alladverts') }}"><i data-feather="align-justify"></i><span
                            class="menu-title text-truncate" data-i18n="Disabled Menu">All Adverts</span></a>
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
                <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('student.adverts') }}"><i
                            data-feather="upload"></i><span class="menu-title text-truncate"
                            data-i18n="Disabled Menu">Post Advert</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('student.myadverts') }}"><i
                            data-feather="folder-minus"></i><span class="menu-title text-truncate"
                            data-i18n="Disabled Menu">My Adverts</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('student.alladverts') }}"><i
                            data-feather="align-justify"></i><span class="menu-title text-truncate"
                            data-i18n="Disabled Menu">All Adverts</span></a>
                </li>
            @endrole
            @role('schooladmin')
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin') }}"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin') }}"><i
                            data-feather="square"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">All Students</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin.allchats') }}"><i
                            data-feather="circle"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Chats</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin.addclub') }}"><i
                            data-feather="film"></i><span class="menu-title text-truncate" data-i18n="Modal Examples">Add
                            Club</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin.myclubs') }}"><i
                            data-feather="folder-plus"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">My Clubs</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('schooladmin.myclubs') }}"><i
                            data-feather="folder-plus"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples"></span></a>
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

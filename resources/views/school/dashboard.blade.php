@extends('layouts.layout')

@section('title', 'School Dashboard')
@section('content')
    <!-- Advanced Search -->
    <section id="advanced-search-datatable">
        <div class="row">
            <!-- share project card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file-text font-large-2 mb-1">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <h5 class="card-title">Share Project</h5>
                        <p class="card-text">Elegant Share Project options modal popup example, easy to use in any page.</p>

                        <!-- modal trigger button -->
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"
                            data-bs-toggle="modal" data-bs-target="#shareProject">
                            Show
                        </button>
                    </div>
                </div>
            </div>
            <!-- / share project card -->

            <!-- add new card  -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-credit-card font-large-2 mb-1">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2">
                            </rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <h5 class="card-title">Add New Card</h5>
                        <p class="card-text">
                            Quickly collect the credit card details, built in input mask and form validation support.
                        </p>

                        <!-- modal trigger button -->
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"
                            data-bs-toggle="modal" data-bs-target="#addNewCard">
                            Show
                        </button>
                    </div>
                </div>
            </div>
            <!-- / add new card  -->

            <!-- pricing card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bar-chart-2 font-large-2 mb-1">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                        <h5 class="card-title">Pricing</h5>
                        <p class="card-text">Elegant pricing options modal popup example, easy to use in any page.</p>

                        <!-- modal trigger button -->
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"
                            data-bs-toggle="modal" data-bs-target="#pricingModal">
                            Show
                        </button>
                    </div>
                </div>
            </div>
            <!-- / pricing card -->

            <!-- refer and earn card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-gift font-large-2 mb-1">
                            <polyline points="20 12 20 22 4 22 4 12"></polyline>
                            <rect x="2" y="7" width="20" height="5"></rect>
                            <line x1="12" y1="22" x2="12" y2="7"></line>
                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                        </svg>
                        <h5 class="card-title">Refer &amp; Earn</h5>
                        <p class="card-text">
                            Use Refer &amp; Earn modal to encourage your exiting customers refer their friends &amp;
                            colleague.
                        </p>

                        <!-- modal trigger button -->
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"
                            data-bs-toggle="modal" data-bs-target="#referEarnModal">
                            Show
                        </button>
                    </div>
                </div>
            </div>
            <!-- / refer and earn card -->

            <!-- add new address card-->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home font-large-2 mb-1">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <h5 class="card-title">Add New Address</h5>
                        <p class="card-text">
                            Ready to use form to collect user address data with validation and custom input support.
                        </p>

                        <!-- modal trigger button -->
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"
                            data-bs-toggle="modal" data-bs-target="#addNewAddressModal">
                            Show
                        </button>
                    </div>
                </div>
            </div>
            <!-- / add new address card-->

            <!-- create app card-->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-package font-large-2 mb-1">
                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <h5 class="card-title">Create App</h5>
                        <p class="card-text">Provide application data with this form modal popup example, easy to use in
                            any page.</p>

                        <!-- modal trigger button -->
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"
                            data-bs-toggle="modal" data-bs-target="#createAppModal">
                            Show
                        </button>
                    </div>
                </div>
            </div>
            <!-- / create app card-->

            <!-- two factor auth -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-key font-large-2 mb-1">
                            <path
                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                            </path>
                        </svg>
                        <h5 class="card-title">Two Factor Auth</h5>
                        <p class="card-text">
                            Use this modal to enhance your application security by enabling two factor authentication.
                        </p>

                        <!-- modal trigger button -->
                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light"
                            data-bs-toggle="modal" data-bs-target="#twoFactorAuthModal">
                            Show
                        </button>
                    </div>
                </div>
            </div>
            <!-- / two factor auth  -->

            <!-- edit user  -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user font-large-2 mb-1">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <h5 class="card-title">Registered Students</h5>
                        <h4></h4>
                        <!-- modal trigger button -->
                        <a href=""  class="btn btn-primary waves-effect waves-float waves-light"
                           >Show</a>
                    </div>
                </div>
            </div>
            <!-- / edit user  -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">All Enrolled Students</h4>
                    </div>
                    <!--Search Form -->

                    <hr class="my-0" />
                    <div class="card-datatable">
                        <div class="table-responsive p-1">
                            <table class="table table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Phone Number </th>
                                        <th>Home Address</th>
                                        <th>Date Registered</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($students->count() > 0)
                                        @foreach ($students as $key => $item)
                                            <tr>
                                                <td>{{ ++$key }}</td>


                                                <td>{{ $item->studentuser->name }}</td>
                                                <td>{{ $item->studentuser->email }}</td>
                                                <td>{{ $item->studentuser->phone_number }}</td>

                                                <td>{{ $item->location_address }}</td>
                                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center col-actions">

                                                        <form
                                                            action="{{ route('schooladmin.deletestudent', $item->slug) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit"
                                                                onsubmit="confirm(\'Are you sure you want to delete this business?\')"
                                                                title="Delete" class="btn btn-danger btn-sm mx-1">
                                                                Remove Student
                                                            </button>
                                                        </form>


                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Advanced Search -->
@endsection

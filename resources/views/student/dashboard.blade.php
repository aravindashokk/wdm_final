@extends('layouts.layout')

@section('title', 'Student Dashboard')
@section('content')
    <!-- Advanced Search -->
    <section id="advanced-search-datatable">
        <div class="row">
            <!-- share project card -->
            <div class="col-md-3">
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
                        <h5 class="card-title">Products</h5>
                        <h4>{{ $products->count() }}</h4>

                        <!-- modal trigger button -->
                        <a href="" class="btn btn-primary waves-effect waves-float waves-light"
                           >
                            Show
                        </a>
                    </div>
                </div>
            </div>
            <!-- / share project card -->

            <!-- add new card  -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-credit-card font-large-2 mb-1">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2">
                            </rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <h5 class="card-title">My Adverts</h5>
                        <h4>{{$adverts->count() }}</h4>

                        <!-- modal trigger button -->
                        <a href="" class="btn btn-primary waves-effect waves-float waves-light"
                           >
                            Show
                        </a>
                    </div>
                </div>
            </div>
            <!-- / add new card  -->


            <!-- two factor auth -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-key font-large-2 mb-1">
                            <path
                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                            </path>
                        </svg>
                        <h5 class="card-title">Clubs</h5>
                       <h4>{{$clubs->count() }}</h4>

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
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user font-large-2 mb-1">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <h5 class="card-title"> Clubs  Enrolled</h5>
                        <h4>{{$myclubs->count() }}</h4>
                        <!-- modal trigger button -->
                        <a href="{{ route('schooladmin') }}"  class="btn btn-primary waves-effect waves-float waves-light"
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
                        <h4 class="card-title">My School Clubs</h4>
                    </div>
                    <!--Search Form -->

                    <hr class="my-0" />
                    <div class="card-datatable">
                        <div class="table-responsive p-1">
                            <table class="table table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Club Image</th>
                                        <th>Name</th>
                                        <th>Students Joined </th>
                                        <th>Description</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($clubs->count() > 0)
                                        @foreach ($clubs as $key => $item)
                                            <tr>
                                                <td>{{ ++$key }}</td>

                                                <td>
                                                    <img src="{{ asset('storage/clubs/' . $item->image) }}"
                                                        style="height:60px;width:100px;border-radius:10px;" alt="">
                                                </td>
                                                <td>{{ $item->club_name }}</td>
                                                <td>
                                                    @php
                                                        $students = App\Models\ClubMember::where(['school_id' => $school->id, 'club_id' => $item->id])->count();
                                                        $enrolled = App\Models\ClubMember::where(['school_id' => $school->id, 'club_id' => $item->id, 'student_id' => Auth::user()->id])->first();
                                                    @endphp
                                                    {{ $students }}</td>
                                                <td>
                                                    {{ str_limit(strip_tags($item->description), 150) }}
                                                    @if (strlen(strip_tags($item->description)) > 150)
                                                        ....
                                                    @endif
                                                </td>
                                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                                <td>

                                                    <div class="d-flex align-items-center col-actions">
                                                        @if ($enrolled)
                                                            <form action="{{ route('student.exitclub', $enrolled->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')<button type="submit" title="Delete"
                                                                    class="btn btn-danger btn-sm mx-1">
                                                                    Deregister
                                                                </button>
                                                            </form>
                                                        @else
                                                            <a href="{{ route('student.enrollclub', $item->slug) }}"
                                                                class="btn btn-primary btn-sm mr-1" title="Edit">
                                                                Enroll
                                                            </a>
                                                        @endif


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

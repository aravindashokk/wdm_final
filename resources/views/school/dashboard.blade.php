@extends('layouts.layout')

@section('title', 'School Dashboard')
@section('content')
 <!-- Advanced Search -->
 <section id="advanced-search-datatable">
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
                                            <td>{{ $item->studentuser->email}}</td>
                                            <td>{{ $item->studentuser->phone_number }}</td>

                                            <td>{{ $item->location_address }}</td>
                                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <div class="d-flex align-items-center col-actions">

                                                    <form action="{{ route('schooladmin.deletestudent', $item->slug) }}"
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

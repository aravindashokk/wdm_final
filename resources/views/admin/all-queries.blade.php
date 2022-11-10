@extends('layouts.layout')
@section('title', 'Admin Dashboard')
@section('content')
    <!-- Advanced Search -->
    <section id="advanced-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Solved Queries</h4>
                    </div>
                    <!--Search Form -->

                    <hr class="my-0" />
                    <div class="card-datatable">
                        <div class="table-responsive p-1">
                            <table class="table table-bordered" id="exampletwo">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email </th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Date Submited</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach ($queries as $key => $item)
                                            <tr>
                                                <td>{{ ++$key }}</td>

                                                <td>{{ $item->firstname }} </td>
                                                <td>{{ $item->lastname }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone_number }}</td>
                                                <td>{{ $item->message }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->created_at->format('d M, Y') }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center col-actions">

                                                        <form action="{{ route('admin.markresolved', $item->slug) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')<button type="submit"
                                                                onsubmit="confirm(\'Are you sure you want to delete this business?\')"
                                                                title="Delete" class="btn btn-danger btn-sm mx-1">
                                                                Mark as Resolved
                                                            </button>
                                                        </form>


                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


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

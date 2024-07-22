@extends('custom_layouts.dash.app')
@section('title', 'Users')

@section('content')

    <div class="container custom-container">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">User Management</h5><br>
                    <a href="{{ route('dashboard.users.create') }}" class="btn btn-info mb-3">Add New</a>

                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $user)
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <span
                                                            class="badge
                                                        @if ($user->hasRole('super_admin')) badge-success
                                                        @elseif ($user->hasRole('admin'))
                                                            badge-info
                                                        @else
                                                            badge-danger @endif
                                                    ">
                                                            @if ($user->roles->isNotEmpty())
                                                                @foreach ($user->roles as $role)
                                                                    {{ $role->name }}
                                                                @endforeach
                                                            @else
                                                                No Role
                                                            @endif

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('dashboard.users.edit', $user->id) }}"
                                                            class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-icon btn-danger btn-icon-style-1"
                                                            data-toggle="modal" data-target="#deleteModal"
                                                            data-userid="{{ $user->id }}">
                                                            <span class="btn-icon-wrap"><i
                                                                    class="icon-trash txt-danger"></i></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- Display message if no users found -->
                                    @if ($data->isEmpty())
                                        <p class="text-center mt-3">No users found.</p>
                                    @endif
                                {{ $data->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" action="{{ route('dashboard.users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

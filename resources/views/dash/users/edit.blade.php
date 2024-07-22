@extends('custom_layouts.dash.app')

@section('title','Edit User')

@section('content')

<div class="container custom-container">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Add New User</h5>
                <form method="POST" action="{{ route('dashboard.users.update',$user->id) }}">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"  value="{{ $user->name }}">
                    </div>
                    @error('name')
                    <span class="danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"  value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="">Choose...</option>
                            @foreach ($roles as $role)
                            <option  value="{{ $role->name }}">{{ $role->display_name }}</option>
                            @endforeach
                        </select>
                        @error('role')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>

@endsection

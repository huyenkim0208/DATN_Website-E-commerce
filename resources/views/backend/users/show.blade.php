@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            @if($user->user_image)
                <img src="{{ asset('storage/assets/images/users/' . $user->user_image) }}" alt="" style="width: 70px;">
            @else
                <img src="{{ asset('default_images/avatar.png') }}" alt="" style="width: 70px;">
            @endif

           <h5 class="font-weight-bold"> {{ $user->full_name }} </h5>
            <div class="ml-auto">
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                    <span class="text">Back to users</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $user->id }}</td>
                    <th>First Name</th>
                    <td>{{ $user->first_name }}</td>
                    <th>Last Name</th>
                    <td>{{ $user->last_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                    <th>Username</th>
                    <td>{{ $user->username }}</td>
                    <th>Phone</th>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $user->status }}</td>
                    <th>Email Verified At</th>
                    <td>{{ $user->email_verified_at ? $user->email_verified_at->format('Y-m-d') : "Undefined" }}</td>
                    <th>Created At</th>
                    <td>{{ $user->created_at ? $user->created_at->format('Y-m-d') : "Undefined" }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

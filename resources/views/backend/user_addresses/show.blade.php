@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $userAddress->name }}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.user_addresses.index') }}" class="btn btn-primary">
                    <span class="text">Back to Addresses</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Address</th>
                    <th>ZIP Code</th>
                    <th>P.O. Box</th>
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $userAddress->last_name }}</td>
                    <td>{{ $userAddress->country->name . ' - ' . $userAddress->state->name . ' - ' . $userAddress->city->name}}</td>
                    <td>{{ $userAddress->address }}</td>
                    <td>{{ $userAddress->zip_code }}</td>
                    <td>{{ $userAddress->po_box }}</td>
                    <td>{{ $userAddress->created_at }}</td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

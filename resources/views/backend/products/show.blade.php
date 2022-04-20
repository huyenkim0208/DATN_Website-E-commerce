@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ $product->name }}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
                    <span class="text">Back to products</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Product Name</th>
                    <td>{{ $product->name }}</td>
                    <th>Price</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>{{ $product->quantity }}</td>
                    <th>Status</th>
                    <td>{{ $product->status }}</td>
                </tr>
                <tr>
                    <th>Featured</th>
                    <td>{{ $product->featured }}</td>
                    <th>Category</th>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $product->created_at ? $product->created_at->format('Y-m-d') : "Undefined" }}</td>
                    <th>Updated At</th>
                    <td>{{ $product->updated_at ? $product->updated_at->format('Y-m-d') : "Undefined" }}</td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td colspan="3">{{ $product->description }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

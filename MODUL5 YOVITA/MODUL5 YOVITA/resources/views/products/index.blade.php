@extends('layout')

@section('content')
@if(!$products->isEmpty())
<div class="row">
    <div class="container text-center">
        <div class="">
            <h3>List Product</h3>
        </div>
        <br> 
    </div>
</div>

<div class="container">
    <div class="row mb-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-3">
                <a class="btn btn-dark" href="{{ route('products.create') }}">Add Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th class="w-50">Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>

        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$product->name}}</td>
            <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('products.edit',$product->id) }}">Edit</a>
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@else
<div class="container col-7 col-md-9">
    <div class="text-center">
    <p>There is no data...</p>
    </div>
    <div class="container text-center">
    <a class="btn btn-dark" href="{{ route('products.create') }}">Add Product</a>
    </div>
</div>
@endif


{!! $products->links() !!}

@endsection

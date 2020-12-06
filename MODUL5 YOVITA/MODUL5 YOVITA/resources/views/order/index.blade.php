@extends('layout')

@section('content')
@if(!$products->isEmpty())
<div class="row">
    <div class="container text-center">
        <div class="">
            <h3>Order</h3>
        </div>
        <br> 
    </div>
</div>

<div class="container">
    @foreach($products as $product)
    <div class="card" style="width: 18rem;">
        <img src="{{ asset($product->img_path) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <h3>{{ $product->price }}</h3>
            <a href="{{ route('order.show',$product->id) }}" class="btn btn-success">Order Now</a>
        </div>
    </div>
    @endforeach
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
   
</div>
@endif


@endsection

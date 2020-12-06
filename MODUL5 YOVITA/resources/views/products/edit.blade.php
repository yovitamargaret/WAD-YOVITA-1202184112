@extends('layout')

@section('content')
<div class="row">
    <div class="container text-center">
        <div class="">
            <h3>Update Product</h3>
        </div>
        <br> 
    </div>
</div>

<div class="container col-7 col-md-9">
    <form action="{{ route('products.update',$products->id) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
        <strong>Product name</strong>
            <input type="text" class="form-control" value="{{ $products->name }}" name="name" id="name" placeholder="Product name" required>
        </div>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
        <strong>Price</strong>
                <div class="input-group-prepend">
                <span class="input-group-text">USD</span> 
                <input type="number" class="form-control fix-rounded-right" id="price" value="{{ $products->price }}" name="price" placeholder="cnth: 150000" required>
            </div>
        </div>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Description</strong>
            <textarea class="form-control" style="height:150px" id="description" name="description" placeholder="Write product description here..."
                required>{{ $products->description }}</textarea>
        </div>
    </div>
    <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
                <strong>Stock</strong>
                <input type="number" class="form-control" name="stock" value="{{ $products->stock }}" id="stock" placeholder="cnth: 10" required>
            </div>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
        <strong>Image file input</strong>
            <input type="file" name="img_path" class="form-control">
        </div>
        </div>


        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
        </div>
        </div>
        </form>
        </div>
    

@endsection

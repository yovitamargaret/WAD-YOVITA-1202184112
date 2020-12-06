@extends('layout')
 
@section('content')

<div class="row">
    <div class="container text-center">
        <div class="">
            <h3> Input Product</h3>
        </div>
        <br> 
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>oops!</strong>Cek kembali form anda<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container col-7 col-md-9">
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Product name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Price</strong>
                <div class="input-group-prepend">
                <span class="input-group-text">USD</span>
                <input type="number" class="form-control fix-rounded-right" id="price" name="price" required>
                </div>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" style="height:150px" name="description" id="description" name="description" placeholder=""></textarea>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Stock</strong>
                <input type="number" name="stock" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Image file input</strong>
                <input type="file" name="img_path" class="form-control" placeholder="Input gambar" >
            </div>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
</form>
</div>
@endsection
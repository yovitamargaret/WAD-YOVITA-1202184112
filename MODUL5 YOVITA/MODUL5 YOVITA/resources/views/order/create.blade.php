@extends('layout')

@section('content')

<div class="row">
    <div class="container text-center">
        <div class="">
            <h3>Order</h3>
        </div>
        <br> 
    </div>
</div>

<div class="container col-7 col-md-9">
<div class="card mb-3" style="max-width: 1000px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset($product->img_path) }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text">{{ $product->stock }}</p>
        <h3>{{ $product->price }}</h3>
      </div>
    </div>
  </div>
</div>
</div>

@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif


<div class="container col-7 col-md-9">
    <div class="card mb-3">
        <div class="container text-center">
            <h3>Buyer Information</h3>
        </div>
        <div class="">
            <form action="{{ route('order.store') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                <strong>Name</strong>
                    <input type="text" class="form-control" id="buyer_name" name="buyer_name">
                </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Contact</strong>
                    <input type="text" class="form-control" id="buyer_contact" name="buyer_contact">
                </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Quantity</strong>
                    <input type="number" class="form-control" id="amount" name="amount">
                </div>
                </div>
                <div class="container text-center">
                <button type="submit" class="btn btn-success">Submit</button>
                <div>
            </form>
        </div>

    </div>
</div>


@endsection

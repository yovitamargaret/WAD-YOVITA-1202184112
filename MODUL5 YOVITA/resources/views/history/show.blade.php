@extends('layout')

@section('content')
@if(!$order->isEmpty())

<div class="container w-75 text-center mt-4">
    <h3>History</h3>
</div>

<div class="container">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th class="w-50">Product</th>
                <th>Buyer Name</th>
                <th>Contact</th>
                <th>Amount</th>
            </tr>
        </thead>
    @foreach($order as $key => $order)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $order->product->name }}</td>
            <td>{{ $order->buyer_name }}</td>
            <td>{{ $order->buyer_contact }}</td>
            <td>{{ $order->amount }}</td>
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

@endsection
@extends('backend.master')
@section('content')
<h1> Order List</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Order Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($orders as $key=>$order)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$order->name}}</td>
      <td>{{$order->phone}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->address}}</td>
      <td>{{$order->total}}</td>
      <td>{{$order->payment_method}}</td>
      <td>{{$order->created_at}}</td>
      <td>
        <a href="{{route('order.view',$order->id)}}" class="btn btn-primary">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

@extends('backend.master')
@section('content')
<h1> Payment Details</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col"> Date</th>
      <th scope="col">Status</th>
     
    </tr>
  </thead>
  <tbody>

  @foreach($orders as $key=>$order)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$order->name}}</td>
      <td>{{$order->total}}</td>
      <td>{{$order->payment_method}}</td>
      <td>{{$order->created_at}}</td>
      <td>{{$order->payment_status}}</td>
      <td>
      
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

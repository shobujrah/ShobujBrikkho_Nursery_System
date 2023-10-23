
@extends('backend.master')

@section('content')


<div  class="container-fluid px-4">

<h1 class="mt-4">Dashboard</h1> 
    
      
    <p class="mt-4">Dashboard/</p>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>

    <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Category</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a>{{$categories}}</a>
                <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Product</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a>{{$products}}</a>
                
            </div>
        </div>
    </div>
   
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body"> User </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a >{{$users}} </a>
            </div>
        </div>
    </div>
</div>

<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>

    
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Order</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a>{{$orders}}</a>
                <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Delivery Man/Employee</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a>{{$employees}}</a>
                
            </div>
        </div>
    </div>
   
    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"> Contact Messeage </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a >{{$contacts}} </a>
            </div>
        </div>
    </div>
</div>


<div>

<br> </br>
<h4> Total Order List</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Order Date</th>
    </tr>
  </thead>
  <tbody>

  @foreach($total_order as $key=>$order)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$order->name}}</td>
      <td>{{$order->phone}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->address}}</td>
      <td>{{$order->total}}</td>
      <td>{{$order->created_at}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>


</div>









</div>
@endsection









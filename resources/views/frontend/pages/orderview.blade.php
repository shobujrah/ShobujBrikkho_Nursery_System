@extends('frontend.master')


@section('content')
<div class="slider">


</div>

<div class="featured-items">

    <div class="container">

        <div class="row">

            <ul class="nav nav-tabs nav-product-tabs">
            <li><a data-toggle="tab" style="text-align: center;">Order Details</a></li>
            <li class="pull-right collection-url"><a>All <i></i></a></li>
            </ul>
<br> </br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Sub Total</th>
    </tr>
  </thead>
  <tbody>

  @foreach($order_items as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->product->name}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->qty}}</td>
      <td>{{$item->subtotal}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>


</div>
  </div>
</div>

@endsection

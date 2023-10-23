@extends('backend.master')


@section('content')
<h1> Order Details</h1>

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

<br> </br>
<h1>Delivery Man Assign</h1>



<h3>Name: {{optional($order->deliveryman)->name}}</h3>
<h3>Status: {{$order->payment_status}}</h3>


<br> </br>
<form action="{{route('assign.delivery',$order->id)}}" method="post" >
  @csrf
       
       <div>
        <label for="employee">Select Delivery Man</label>
        <select class="form-select" aria-label="Default select example" name="deliveryman_id">
        @foreach($employees as $employee)
            <option value="{{$employee->id}}">{{$employee->name}}</option>
        @endforeach      
       </select>
       </div>
     
       <div>
        <label for="employee">Select Payment Status </label>
        <select class="form-select" aria-label="Default select example" name="status">
   
            <!-- <option value="success">VALID</option> -->
            <option value="success">Success</option>
            <option value="cancel">Cancel</option>
        
       </select>
       </div>

       <button type="submit" class="btn btn-primary">Submit</button>
<form>





@endsection





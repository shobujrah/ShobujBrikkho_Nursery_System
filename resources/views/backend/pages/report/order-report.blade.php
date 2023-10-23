@extends('backend.master')

@section('content')

<h1>Order Report</h1>

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

@if ($errors->any())
  @foreach($errors->all() as $error)
    <div>
    <p> <strong style="color: red;" class="alert-danger"> {{$error}}  </strong> </p> 
  </div>
  @endforeach
  @endif

<form action="{{route('order.report.search')}}" method="get">

<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input value="{{request()->from_date}}" name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input value="{{request()->to_date}}" name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</div>

</form>
<br></br>
<div id="productReport">

<h1 style="color: black;">Report of: {{request()->from_date}} to  {{request()->to_date}}</h1>
    <table class="table table-striped">
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
            <!-- <th scope="col">Action</th> -->

        </tr>
        </thead>
        <tbody>
        @if(isset($orders))
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

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('productReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


@endsection
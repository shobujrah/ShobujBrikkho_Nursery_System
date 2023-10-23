@extends('frontend.master')


@section('content')
<div class="slider">


</div>

<div class="featured-items">

    <div class="container">

        <div class="row">

            <ul class="nav nav-tabs nav-product-tabs">
            <li><a data-toggle="tab" style="text-align: center;">My orders</a></li>
            <li class="pull-right collection-url"><a>All <i></i></a></li>
            </ul>
<br> </br>

<table class="table">
  <thead>
    <tr>

      <th scope="col">Serial</th>
      <th scope="col">Receiver Name</th>
      <th scope="col"> Total Ammount</th>
      <th scope="col">payment Method</th>
      <th scope="col">Date</th>
    
   
    </tr>
  </thead>
  <tbody>

      @foreach($orders as $key=>$item)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->total}}</td>
          <td>{{$item->payment_method}}</td>
          <td>{{$item->created_at}}</td>
          <td>
            
        
          <td>
                <a href="{{route('my.order.view',$item->id)}}" class="btn btn-primary">View</a>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>

    </div>
  </div>
</div>


@endsection
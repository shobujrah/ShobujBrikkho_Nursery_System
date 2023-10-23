@extends('backend.master')

@section('content')


<div class="container-fluid px-4">

<h1 class="mt-2"> All Product </h1>
<ol class="breadcrumb mb-1">      
</ol>
@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

<a href="{{route('product.create.form')}}" class="btn btn-success">Create New Product</a>

<ol class="breadcrumb mb-2">      
</ol>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    
  @foreach($productsCollection as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->category_data->name}}</td>
      <td>
        <img style="width: 45px;" src="{{url('/uploads/products/'.$product->image)}}" alt="">
      </td>
      <td>{{$product->price}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->status}}</td>
      <td>
        <a class="btn btn-primary"  href="{{route('product.view',$product->id)}}">View</a>
        <a class="btn btn-warning"  href="{{route('product.edit',$product->id)}}">Edit</a>
        <a  class="btn btn-danger" href="{{route('product.delete',$product->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>





{{$productsCollection->links()}}




</div>
@endsection
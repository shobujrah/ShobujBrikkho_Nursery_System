@extends('backend.master')

@section('content')


<div class="container-fluid px-4">

<h1 class="mt-4">User Details </h1>
<ol class="breadcrumb mb-4">      
</ol>

<ol class="breadcrumb mb-2">      
</ol>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <!-- <th scope="col">Actions</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($usercollection as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td> {{$user->name}}</td>
      <td> {{$user->email}}</td>
      <td> {{$user->status}}</td>
      <td> {{$user->phone}}</td>
      <td> {{$user->address}}</td>
      <!-- <td>
        <a class="btn btn-primary"  href="">View</a>
        <a class="btn btn-warning"  href="">Edit</a>
        <a  class="btn btn-danger" href="">Delete</a>
      </td> -->
    </tr>
    
@endforeach
  </tbody>
</table>










</div>
@endsection
@extends('backend.master')

@section('content')


<div class="container-fluid px-4">

<h1 class="mt-4"> Contact Info Details </h1>
<ol class="breadcrumb mb-4">      
</ol>

<ol class="breadcrumb mb-2">      
</ol>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <!-- <th scope="col">Actions</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($contact as $key=>$contact)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <!-- <td> {{$contact->id}}</td> -->
      <td> {{$contact->name}}</td>
      <td> {{$contact->email}}</td>
      <td>{{$contact->message}} </td>
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
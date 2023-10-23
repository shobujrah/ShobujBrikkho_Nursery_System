@extends('backend.master')

@section('content')


<div class="container-fluid px-4">

<h1 class="mt-2"> Delivery Man Details</h1>
<ol class="breadcrumb mb-1">      
</ol>
@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

<a href="{{route('employee.add.form')}}" class="btn btn-success">Add New Delivery Man</a>

<ol class="breadcrumb mb-2">      
</ol>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <!-- <th scope="col">Address</th> -->
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($employees as $employee)
    <tr>
      <th scope="row">{{$employee->id}}</th>
      <td>{{$employee->name}}</td>
      <td>{{$employee->phone}}</td>
      <td>{{$employee->email}}</td>
      <td>
        <img style="width: 45px;" src="{{url('/uploads/employee/'.$employee->image)}}" alt="">
      </td>
      <!-- <td>{{$employee->address}}</td> -->
      <td>{{$employee->status}}</td>
      <td>
        <a class="btn btn-primary"  href="{{route('employee.view',$employee->id)}}">View</a>
        <a class="btn btn-warning"  href="{{route('employee.edit',$employee->id)}}">Edit</a>
        <a  class="btn btn-danger" href="{{route('employee.delete',$employee->id)}}">Delete</a>
      </td>
    </tr>
 
@endforeach
  </tbody>
</table>









</div>
@endsection
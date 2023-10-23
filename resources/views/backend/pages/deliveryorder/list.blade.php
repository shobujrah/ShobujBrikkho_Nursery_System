@extends('backend.master')


@section('content')

<div class="container-fluid px-4">

<h1 class="mt-2"> Assign Order </h1>
<ol class="breadcrumb mb-1">
       
</ol>
@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif
<a href="{{route('delivery.create.form')}}" class="btn btn-success">Create</a>

<ol class="breadcrumb mb-2">

</ol>

<table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Order</th>
            <th scope="col">Delivery Man Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            

        </tr>
        </thead>
        <tbody>

      
        <tr>
            <th scope="row"></th>
            <td</td>
            <td></td>
            <td></td>
            <td>
        <ul>
          <!-- <a href="" class="btn btn-primary ">View</a>
          <a href=""class="btn btn-warning" >Edit</a>
          <a href="" class="btn btn-danger" >Delete</a>
           -->
        </ul>
      </td>
        </tr>
      

        </tbody>
    </table>

   


</div>



@endsection
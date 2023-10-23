@extends('backend.master')


@section('content')

<div class="container-fluid px-4">

<h1 class="mt-2"> Categories </h1>
<ol class="breadcrumb mb-1">
       
</ol>
@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif
<a href="{{route('category.create.form')}}" class="btn btn-success">Create</a>

<ol class="breadcrumb mb-2">

</ol>

<table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            

        </tr>
        </thead>
        <tbody>

        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>
            <td>{{$category->description}}</td>
            <td>
        <ul>
          <a href="{{route('category.view',$category->id)}}" class="btn btn-primary ">View</a>
          <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning" >Edit</a>
          <!-- <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger" >Delete</a> -->
          
        </ul>
      </td>
        </tr>
        @endforeach

        </tbody>
    </table>

    {{$categories->links()}}


</div>



@endsection
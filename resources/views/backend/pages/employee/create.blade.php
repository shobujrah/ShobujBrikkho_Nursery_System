@extends('backend.master')

@section('content')

<h1>Delivery Man Information</h1>

<!-- @if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif -->

@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
               <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif

    <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data" >
    @csrf

       <div class="form-group">
           <label for=""> Delivery Man Name <span style="color:red">*</span></label>
           <input type="text" class="form-control" required name="employee_name"  placeholder="Enter Employee Name">
       </div>

       <div class="form-group">
            <label for=""> Phone_No <span style="color: red;">* </span></label>
            <input type="tel" class="form-control" required name="phone_No" placeholder="Enter Phone_No">
        </div>

        <div class="form-group">
            <label for=""> Email</label>
            <input type="email" class="form-control" required name="email" placeholder="Enter Email Address">
        </div>

        <div class="form-group">
           <label for=""> Upload Image<span style="color:red">*</span></label>
           <input  type="file" class="form-control"  name="employee_image" placeholder="Enter employees image">
       </div>

       <div class="form-group">
            <label for=""> Address <span style="color:red">*</span></label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
       </div>

       <ol class="breadcrumb mb-1">      
        </ol>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection
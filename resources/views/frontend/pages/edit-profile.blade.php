@extends('frontend.master')
@section('content')

<div class="featured-items">

<div class="container">

    <div class="row">

        <ul class="nav nav-tabs nav-product-tabs">

            <li><a data-toggle="tab" style="text-align: center;">Edit rofile</a></li>

        </ul>

        <div class="tab-content">

<br> </br>


        <form class="form" action="{{route('customer.update',auth('customer')->user()->id)}}" method="post" enctype="multipart/form-data">
                
                @csrf
        
                <div class="form-group">
                    <label for="">Name</label>
                    <input required type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth('customer')->user()->name}}">
                </div>
        
        
                <div class="form-group">
                    <label for="">Email</label>
                    <input required type="email" name="email" class="form-control" id="exampleInputPassword1 " value="{{auth('customer')->user()->email}}">
                </div>
        
                <div class="form-group">
                     <label for="">Phone</label>
                     <input type="phone" name="phone" class="form-control" id="number " value="{{auth('customer')->user()->phone}}">
                </div>
                
                <div class="form-group">
                     <label for="">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{auth('customer')->user()->address}}">
                </div>
    
                <!-- <div class="form-group">
                <input type="password" name="password" class="form-control" id="exampleInputPassword1 " value="{{auth('customer')->user()->email}}">
                </div> -->
                <div class="form-group">
                     <label for="">Upload Image</label>
                    <input type="file" name="image" class="form-control" id="image " value="">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>














        </div>

    </div>


</div>      

@endsection
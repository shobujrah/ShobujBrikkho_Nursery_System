@extends('frontend.master')


@section('content')

<!-- <h1>Customer Login</h1>

<form action="" method="post">

    @csrf
  
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

<title>Bootstrap Simple Login Form</title>

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>

<body>
<div class="login-form">
    <form action="{{route('customer.dologin')}}" method="post">
        
    @if($errors->any())

    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach 

    @endif
@csrf 

        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label" ><input type="checkbox" required="required" > Remember me</label>
            
        </div>  

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Log in</button>
        </div>
            <!-- <a href="#" class="float-right">Forgot Password?</a>  -->
    </form>
    
</div>
</body>


@endsection
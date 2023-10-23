<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .login-container {
      width: 300px;
      margin: 0 auto;
      padding: 25px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-top: 200px;
    }

    h2 {
      text-align: center;
    }

    input[type="email"],
    input[type="password"] {
      width: 92%;
      padding: 10px;
      margin-bottom: 10px;
      border: 2px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    @if(session()->has('msg'))
                <p class="alert alert-success">{{session()->get('msg')}}</p>
            @endif
    <form action="{{route('admin.do-login')}}" method="post">

          @if($errors->any())

      @foreach($errors->all() as $err)
      <p class="alert alert-danger">{{$err}}</p>
      @endforeach 

      @endif

    @csrf

                  <div class="form-group">
                     <label>Email</label>
                     <input name="email" required type="email" class="form-control" placeholder="User Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input name="password" required type="password" class="form-control" placeholder="Password">
                  </div>
                  
                  <input type="submit" value="Log In">
              </form>

  </div>
</body>
</html>

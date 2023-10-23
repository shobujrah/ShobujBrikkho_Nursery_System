
<div class="top-bar">
    
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="social pull-left">

                        <ul>
                            <!-- <li><a> -->
                            <!-- <img src="img/ShobujBrikkho.png" style="width: 27px; height: 27px" alt=""> -->
                                
                            <li style="color: white;">Cell: +880 1851517065</li>
                            <li style="color: white;">Gmail: shobujsumon143@gmail.com</li>

                            <!-- <li><a><i></i>Gmail: shobujsumon143@gmail.com</a></li> -->
                        
                        </ul>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="action pull-right">

                        <ul>
                            <!-- <li><a href="{{route('admin.login')}}">Login</a></li> -->
                            <li style="color: white;"> ShobujBrikkho Nursery </li>
                           <!-- <li>  <img src="img/ShobujBrikkho.png" style="width: 30px; height: 30px"> </li> -->
                        </ul>  
                    
                    
                    </div>

                </div>

            </div>
       
          </div>

    </div>

    <div class="header">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-4">

                    <div class="logo">

                        <a style="color: Black;">
                            
                            <img src="{{url('img/ShobujBrikkho.png')}}" style="width: 80px; height: 80px">
                            <!-- ShobujBrikkho Nursery -->
                        </a> 
                        

                    </div>

                </div>

                <div class="col-md-7 col-sm-5">

                        <div class="search-form">

                                <form action="{{route('search')}}" class="navbar-form" role="search">

                                    <div class="form-group">

                                    <input name="search" type="text" class="form-control" placeholder="Search...">

                                    </div>

                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>

                                </form>

                </div>


                </div>
                
                <div class="col-md-2 col-sm-3">

                    <div class="cart">

                        <div class="cart-icon">

                            <a href="{{route('cart.view')}}"><i class="fa fa-shopping-cart"></i></a>

                        </div>

                        <div class="cart-text">

                             CART

                            <br>

                            {{session()->has('cart')?count(session()->get('cart')):0}} items

                             </br>
                             

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="navigation">

        <nav class="navbar navbar-theme">
       
          <div class="container">

            <div class="shop-category nav navbar-nav navbar-left">

                <div class="btn-group">

                  <button type="button" class="btn btn-shop-category dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                     Category <span class="caret"></span>

                  </button>

                  <ul class="dropdown-menu">

                @foreach($categories as $category)
                <li>
                    <a href="{{route('category.products',$category->id)}}">{{$category->name}}</a>
                </li>
                @endforeach

                  </ul>

                </div>

            </div>

        
           
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar">

              <ul class="nav navbar-nav navbar-right">

                <li><a href="{{route('home')}}">Home</a></li>
               
                <li><a href="{{route('website.all-products')}}">Products</a></li>

                <li><a href="{{route('about')}}">About</a></li>

                <li><a href="{{route('contact')}}">Contact</a></li>
                @if (auth('customer')->guest())
                <li><a href="{{route('customer.registration')}}"><i class="fa fa-user"></i> Register</a></li>
                <li><a href="{{route('customer.login')}}"><i class="fa fa-key"></i> Login</a></li>
                @endif
                
                <!-- <nav class="navbar navbar-theme">
       
          <div class="container"> -->

            <div class="shop-category nav navbar-nav navbar-right">
                <div class="btn">
                    @if (auth('customer')->user())
                <button class="shop-category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth('customer')->user()->name}}
                </button>
                  <ul class="dropdown-menu">
                <li>
                    <a style="text-align:center;" href="{{route('customer.profile')}}">Profile</a>   
                    <a style="text-align:center;" href="{{route('my.order',auth('customer')->user()->id)}}">My Order</a>
                    <a style="text-align:center;" href="{{route('customer.logout')}}">Logout</a>
                </li>
            
                  </ul>

                 
                  @endif

                </div>

            </div>

              </ul>

            </div><!-- /.navbar-collapse -->

          </div><!-- /.container-fluid -->

          

        </nav>

    </div>
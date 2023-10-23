@extends('frontend.master')


@section('content')



<div class="slider">


</div>

<div class="featured-items">

<div class="container">

    <div class="row">

        <ul class="nav nav-tabs nav-product-tabs">

            <li><a data-toggle="tab">Gallery</a></li>

            <!-- <li><a href="#best-seller" data-toggle="tab">Best Seller</a></li> -->

            

            <li class="pull-right collection-url"><a>All <i></i></a></li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="trending">
            @foreach($allProducts as $product)
                <div class="col-md-4 col-sm-2">

                    <div class="single-product">

                        <div class="product-block">

                            <img src="{{url('/uploads/products/'.$product->image)}}"  alt="" class="thumbnail" style="width: 355px; height: 305px;">

                            <div class="product-description text-center">

                            <p class="title">{{$product->name}}</p>

                            <p class="price">{{$product->price}} BDT</p>


                            </div>

                            <div class="product-hover">

                                <ul>

                               <!-- <li>
                                <form action="{{route('add.to.cart',$product->id)}}" method="post"> 
                                    @csrf
                                        <button type="submit"><i class="fa fa-cart-arrow-down"></i></button>
                                    
                                </form>
                                 </li> -->

                                    <li><a href="{{route('website.product-details',$product->id)}}"><i class="fa fa-arrows-h"></i></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
                @endforeach
            </div>  

        </div>

    </div>

</div>

</div>


</div>

@endsection
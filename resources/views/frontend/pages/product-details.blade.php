@extends('frontend.master')
@section('content')

<div class="breadcumbs">

        <!-- <div class="container">

            <div class="row">

                <span>Home > </span>

                <span>Men > </span>

                <span>Eyewear > </span>

                <span>Blue Jacket</span>

            </div>

        </div>

    </div>   -->

    <div class="short-description">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="product-thumbnail">

                        <div class="col-md-2 col-sm-2 col-xs-2">

                            <ul class="thumb-image">

                                <li class="active"><a href="images/single-product-1.jpg"><img src="{{url('/uploads/products/'.$singleShow->image)}}" alt=""></a></li>

                                <li><a href="images/single-product-2.jpg"><img src="{{url('/uploads/products/'.$singleShow->image)}}" alt=""></a></li>

                                <li><a href="images/single-product-3.jpg"><img src="{{url('/uploads/products/'.$singleShow->image)}}" alt=""></a></li>

                                <li><a href="images/single-product-4.jpg"><img src="{{url('/uploads/products/'.$singleShow->image)}}" alt=""></a></li>

                                <li><a href="images/single-product-5.jpg"><img src="{{url('/uploads/products/'.$singleShow->image)}}" alt=""></a></li>

                            </ul>

                        </div>

                        <div class="col-md-10 col-sm-10 col-xs-10">

                            <div class="thumb-main-image"><a href=""><img src="{{url('/uploads/products/'.$singleShow->image)}}" alt=""></a></div>

                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>

                <div class="col-md-6">

                    <h1 class="product-title">{{$singleShow->name}}</h1>

                    <!-- <div class="ratings">

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                        <i class="fa fa-star"></i>

                        <span class="vote-count">35 vote</span>

                    </div> -->
                    <br> </br>

                    <div class="product-info">

                        <span class="product-id"><span class="strong-text">Product ID:</span>{{$singleShow->id}}</span>

                    </div>
                    
                    <p>
                    <span class="product-avilability"><span class="strong-text">Availability:</span> In Stock ( {{$singleShow->quantity}} )</span>
                    </p>

                    <p class="short-info"> {{$singleShow->description}} </p>

                    <div class="price"> 

                        <span>{{$singleShow->price}} BTD</span>

                    </div>

                    <form action="{{route('add.to.cart',$singleShow->id)}}" method="post"  class="purchase-form">
                     @csrf
                       <div class="qt-area" >

                           <!-- <i class="fa fa-minus"></i> -->

                           <input type="number" name="quantity" class="qt" value="1" min="1">

                           <!-- <i class="fa fa-plus"></i> -->

                       </div>
                       @if($singleShow->quantity>0)

                       <!-- <a class="btn btn-theme" href="{{route('add.to.cart',$singleShow->id)}}" role="button">Add to cart</a> -->
                       <button type="submit" class="btn btn-theme">Add to cart</button>
                     @endif
                    </form>

                    <p><span class="strong-text">Categories:</span> {{$singleShow->category_data->name}}</p>

                </div>

            </div>

        </div>

    </div> 

    <div class="container">

        <div class="row">

            <div class="single-product-tabs">

                <ul class="nav nav-tabs nav-single-product-tabs">

                    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>

                    <!-- <li><a href="#reviews" data-toggle="tab">Reviews</a></li> -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="description">

                        <div class="product-desc">

                            <h2>Product Description</h2>

                            <p> {{$singleShow->description}}</p>

                        </div>

                    <!-- </div>

                    <div class="tab-pane" id="reviews">

                    </div> -->

                </div>

            </div>

        </div>

    </div>

</div>


@endsection





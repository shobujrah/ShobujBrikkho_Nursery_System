@extends('frontend.master')

@section('content')

<!-- <h1 style="text-align: center;">Products under a {{$category->name}}</h1> -->
<div class="slider">


</div>

<div class="featured-items">

<div class="container">

    <div class="row">

        <ul class="nav nav-tabs nav-product-tabs">

            <li><a data-toggle="tab" style="text-align: center;">Products under {{$category->name}}</a></li>
            <li class="pull-right collection-url"><a>All <i></i></a></li>
        </ul>
        <div class="tab-content">
        <div class="tab-pane active" id="trending">

            @foreach($category->products as $product)
            <div class="col-md-4 col-sm-2">

<div class="single-product">

    <div class="product-block">

        <img src="{{url('/uploads/products/'.$product->image)}}" alt="" class="thumbnail"style="width: 355px; height: 305px;">

        <div class="product-description text-center">

        <p class="title">{{$product->name}}</p>

        <p class="price">{{$product->price}} BDT</p>


        </div>

        <div class="product-hover">

            <ul>

                <li><a href="{{route('website.product-details',$product->id)}}"><i class="fa fa-arrows-h"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>
@endforeach
</div>



<!-- <div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-3.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href="single-product.html"><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-4.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-5.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-6.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-7.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-8.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

</div>

<div class="tab-pane fade" id="best-seller">

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-9.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-10.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-11.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-12.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-13.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-14.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-15.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

<div class="col-md-3 col-sm-4">

<div class="single-product">

    <div class="product-block">

        <img src="images/product-16.jpg" alt="" class="thumbnail">

        <div class="product-description text-center">

            <p class="title">Date Tiffany Torchiere</p>

            <p class="price">$ 55.00</p>

        </div>

        <div class="product-hover">

            <ul>

                <li><a href=""><i class="fa fa-cart-arrow-down"></i></a></li>

                <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                <li><a href=""><i class="fa fa-heart-o"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>

</div> -->

</div>

</div>

</div>

</div>


</div>

@endsection
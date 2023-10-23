@extends('frontend.master')

@section('content')

<div class="featured-items">

<div class="container">

    <div class="row">

        <ul class="nav nav-tabs nav-product-tabs">

            <li><a data-toggle="tab" style="text-align: center;">Conatct Us</a></li>

        </ul>

        <div class="tab-content">
        
        <section class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <!-- <h2>Contact Us</h2> -->
        <p>Have any questions? Feel free to reach out to us.</p>
        <address>
          <strong>Nursery Name</strong><br>
          ShobujBrikkho<br>
          Place: 12 Street road<br>
          Hemayetpur,Dhaka<br>
          Zip Code:1347<br>
        </address>
      </div>
      <div class="col-md-6">
        <h2>Send Us a Message</h2>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
               <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
       @endif

        <form action="{{route('contact.store')}}" method="post">
          @csrf

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your Message"> </textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </section>
          

        </div>

    </div>

</div>

</div>


</div>

@endsection


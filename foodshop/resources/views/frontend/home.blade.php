@extends('frontend.main')
@section('content')
<section class="main">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-7 pt-5 text-center">
        <h1 class="pt-5">Creating Smile Through Good Foods !!</h1>
        <button class="btn1 mt-3">More Tips</button>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-8 m-auto text-center">
        <h1>Welcome To Our Organic Food Society.</h1>
        <h6 style="color: red;">Be Healthy Organic Food</h6>
      </div>
    </div>
      <div class="row">
        @foreach($News as $new)
      <div class="col-lg-4">
          <img src="{{asset($new->image)}}" class="img-fluid mb-3" alt="">
          <h5>{{$new->name}}</h5>
          <p>{{$new->description}}</p>
        </div>
        @endforeach
    </div>
    <div class="row pt-3">
      <div class="col-lg-6 text-center m-auto">
        <button class="btn1">Shop More</button>
      </div>
    </div>
  </div>
</section>

<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto text-center">
        <h1>Contact Us</h1>
        <h6 style="color: red;">Always Be In Touch With Us.</h6>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-9 m-auto">
        <div class="row">
          <div class="col-lg-4">
            <h6>LOCATION</h6>
            <p>Itahari-20, Tarahara, Nepal</p>
          
            <h6>Phone Number</h6>
            <p>9800995588</p>
          
            <h6>E-Mail</h6>
            <p>sosneyakoirala@gmail.com</p>
        
        </div>
        <div class="col-lg-7">
        <form action="{{route('storecontact')}}">
          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="form-control bg-light" placeholder="Your Name" name="name">
            </div>
            <div class="col-lg-6">
              <input type="text" class="form-control bg-light" placeholder="Your Email" name="email">
            </div>
            <div class="col-lg-12 py-3">
              <textarea class="form-control bg-light" placeholder="Message" id="" name="message" cols="10" rows="5"></textarea>
            </div>
            <div >
            <button class="btn btn-primary" type="submit">Button</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
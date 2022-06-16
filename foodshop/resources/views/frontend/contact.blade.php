@extends('frontend.main')
@section('content')
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
            <p>980099588</p>
          
            <h6>E-Mail</h6>
            <p>sosneyakoiralashop@gmail.com</p>
        
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
              <textarea name="" class="form-control bg-light" placeholder="Message" id="" name="message" cols="10" rows="5"></textarea>
            </div>
            <div >
            <button class="btn btn-primary" type="submit">Button</button>
              </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
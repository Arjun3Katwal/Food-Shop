@extends('frontend.main')
@section('content')

<section class="about">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-8 m-auto text-center">
        <h1>Welcome To Our Organic Food Society.</h1>
        <h6 style="color: red;">Be Healthy Organic Food</h6>
      </div>
    </div>
      <div class="row">
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
@endsection
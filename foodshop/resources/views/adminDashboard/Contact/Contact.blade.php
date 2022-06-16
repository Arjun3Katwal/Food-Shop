@extends('admindashBoard.header')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0"> </h3>
        </div>
        
      </div>
    </div>
    <div class="card-body">
      <form>
        <h6 class="heading-small text-muted mb-4">Contact</h6>
        <div class="pl-lg-4">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              @foreach($contact as $cont)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$cont->name}}</td>
                <td>{{$cont->email}}</td>
                <td>{{$cont->message}}</td>
</tr>
@endforeach
            </tbody>
          </table>
       
        </div>
        @endsection
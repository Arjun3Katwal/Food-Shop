@extends('admindashBoard.header')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0"> </h3>
        </div>
        <div class="col-4 text-right">
          <a href= "{{route('News')}}" class="btn btn-sm btn-primary"> Add</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form>
        <h6 class="heading-small text-muted mb-4">NEWS</h6>
        <div class="pl-lg-4">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">DESCRIPTION</th>
              </tr>
            </thead>
            <tbody>
              @foreach($News as $new)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$new->name}}</td>
                <td><img src="{{asset($new->image)}}" alt="" width="100%"></td>
                <td>{{$new->description}}</td>
                <td><a href="{{route('editNews', $new->id)}}" class="btn btn-primary">Edit</a> </td>
                <td><a href="{{route('delete', $new->id)}}" class="btn btn-danger">Delete</a></td>
              </tr>
             @endforeach
            </tbody>
          </table>
       
        </div>
        @endsection
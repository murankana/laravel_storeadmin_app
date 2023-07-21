@extends('layout')
@section('title',"Home Page")
@section('content')
<style>
.card{
    padding:0.5em!important;
}
.card-img-top{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2)!important;
            border-radius: 50% !important;
            width:100px;
            height:100px; 
            object-fit: cover;        
           
            padding:0.25em!important;
        }
</style>
<div class="card ms-auto me-auto mb-2 mt-2">
    <div class="card-header">
        About Us
    </div>
  <div class="card-body">
    <div class="container text-center">
        <div class="row mb-2">
        @foreach($data as $about_us)
            <div class="col-md-4 col-lg-4 col-sm-6">
            <div class="card ms-auto me-auto mb-2 mt-2" style="width: 18rem;">
            <div class="text-center">
            <img src="/About/{{$about_us->image}}" class="card-img-top" alt="...">
            </div>
  <div class="card-body">
    <h5 class="card-title">{{$about_us->name}}</h5>
    <p class="card-text">{{$about_us->description}}</p>
    <h5 class="card-text">{{$about_us->email}}</h5>
  </div>  
  <div class="card-body">
    <a href="{{url('update_view',$about_us->id)}}" class="btn btn-primary">Edit</a>
    <a href="{{url('delete',$about_us->id)}}" class="btn btn-danger">Delete</a>
  </div>
</div> 

            </div>
            @endforeach
    </div>
  </div>
</div>
@endsection
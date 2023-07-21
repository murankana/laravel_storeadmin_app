@extends('layout')
@section('title',"Home Page")
@section('content')
<div class="text-center">
    <h3>Add About us details</h3>
</div>
<div class="text-center">
<a href="{{url('about_view')}}" class="btn btn-primary" role="button">View details</a>
</div>
<form action="{{url('update',$about_us->id)}}" method="POST" class="ms-auto me-auto mt-auto" style="width:500px" enctype="multipart/form-data">  
    @csrf
    <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$about_us->name}}">
  </div>
    <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{$about_us->email}}">    
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{$about_us->description}}">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Old Image</label>
    
  <img src="/About/{{$about_us->image}}" width="150px" height="200px">
</div> 
<div class="mb-3">
  <label for="formFile" class="form-label">Upload new image</label>
    
  <input class="form-control" type="file" name="file">
</div>   
  <input type="submit" class="btn btn-success" value="update">
</form>
@endsection
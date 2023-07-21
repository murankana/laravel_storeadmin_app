@extends('layout')
@section('title','Aboutus')
@section('content')        
<div class="text-center">
    <h3>Add About us details</h3>
</div>
<div class="text-center">
<a href="{{url('about_view')}}" class="btn btn-primary" role="button">View details</a>
</div>
<form action="{{route('about_upload.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width:500px" enctype="multipart/form-data">  
    @csrf
    <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
    <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">    
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Upload Image</label>
  <input class="form-control" type="file" name="file">
</div>    
  <button type="submit" class="btn btn-primary">Save</button>
  

</form>
<!-- <a href="{{url('about_view')}}" class="card-link">View</a> -->

@endsection
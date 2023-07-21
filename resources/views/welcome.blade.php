@extends('layout')
@section('title',"Home Page")
@section('content')
<div class="card ms-auto me-auto mb-2 mt-2">
    <div class="card-header">
        About Us
    </div>
  <div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
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

            </div>
        </div>
    </div>
  </div>
</div>
@endsection
@extends('layout')
@section('title','Blog')
@section('content')
<div class="text-center">
    <h3>Add blog details</h3>
</div>
<form action="" method="POST" class="ms-auto me-auto mt-auto" style="width:500px">  
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
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Upload Image</label>
  <input class="form-control" type="file" name="file">
</div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
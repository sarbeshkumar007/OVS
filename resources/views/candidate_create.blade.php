@extends('layouts.backend.layouts.master')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{route('candidate.submit')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>F_Name</label>
    <input type="text" name="F_name" class="form-control"  placeholder="Name likho">
    
  </div>
  <div class="form-group">
    <label>L_Name</label>
    <input type="text" name="L_name" class="form-control"  placeholder="Name">
  </div>

  <div class="form-group">
    <label>Citizenship no</label>
    <input type="text" name="Citizenship_no" class="form-control"  placeholder="Citizenship_no">
  </div>
  
  <div class="form-group">
    <label>Age</label>
    <input type="text" name="age" class="form-control" placeholder="Author">
  </div>
  <div class="form-group">
  <label>Email</label>
  <input type="text" name="email" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Gender</label>
  <input type="text" name="gender" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Qualification</label>
  <input type="text" name="qualification" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Marital_status</label>
  <input type="text" name="marital_status" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>City</label>
  <input type="text" name="city" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Area</label>
  <input type="text" name="area" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Upload photo</label>
  <input type="file" name="upload_photo" class="form-control"  placeholder="Photo">
  </div>

  <div class="form-group">
  <label>Party_Name</label>
  <input type="text" name="party_name" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Election_Symbol</label>
  <input type="text" name="election_symbol" class="form-control"  placeholder="Price">
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
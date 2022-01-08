@extends('layouts.app')


@section('title')




@section('content')

<div class="container">
<center>
  <h2>Class Master Form</h2>
  <form method="post" class="was-validated"  enctype="multipart/form-data" >
  @csrf
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <div class="row ">
        <div class="col-sm-6">
            <div class="form-group">
            
                <label for="sessionno">sessionno:</label>
                <input type="text" class="form-control card" required  placeholder="Enter Sessionno" id="sessionno" name="sessionno">
                <div class="valid-feedback">Sessionno from filled</div>
                <div class="invalid-feedback">Please fill out your Sessionno from.</div>
              </div>
              </div>
  <div class="col-sm-6">
  <div class="form-group">
    <label for="classname">Class name:</label>
    <input type="text" class="form-control card" required  name="classname" placeholder="Enter Class Nmae" id="classname">
    <div class="valid-feedback">Session To filled</div>
    <div class="invalid-feedback">Please fill out your Session To </div>
  </div>
  </div>
  </div>
    <div class="row ">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="remarks">Remarks:</label>
    <input type="text" class="form-control card"  required  name="remarks" placeholder="Enter Remarks" id="remarks">
    <div class="valid-feedback">Remarks filled</div>
    <div class="invalid-feedback">Please fill out your Remarks.</div>
  </div>
  </div>
    <div class="col-sm-6">
  <div class="form-group">
    <label for="enteredby">EnteredBy:</label>
    <input type="text" class="form-control card" required  name="enteredby" placeholder="Enter EnteredBy" id="enteredby">
    <div class="valid-feedback">Enteredby filled</div>
    <div class="invalid-feedback">Please fill out your Enteredby.</div>
  </div>
  </div>
  </div>
<div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-2">
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>
</div>

</div>



  </form>
  </center>
</div>



@endsection




  @section('content')
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  @endsection
  
  @section('footer')
  <h1>the Footer</h1>
  @endsection
@extends('layouts.app')


@section('title')




@section('content')

<div class="container">
<center>
  <h2>Session Master Form</h2>
  <form method="post" class="was-validated"  enctype="multipart/form-data" >
  @csrf
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <div class="row ">
	    
        <div class="col-sm-6">
            <div class="form-group">
            
                <label for="sessionfrom">sessionfrom:</label>
                <input type="date" class="form-control card" required  placeholder="Enter Session from" id="sessionfrom" name="sessionfrom">
                <div class="valid-feedback">Session from filled</div>
                <div class="invalid-feedback">Please fill out your Session from.</div>
              </div>
              </div>
              
  <div class="col-sm-6">
  <div class="form-group">
    <label for="sessionto">Session To:</label>
    <input type="date" class="form-control card" required  name="sessionto" placeholder="Enter Session To" id="sessionto">
    <div class="valid-feedback">Session To filled</div>
    <div class="invalid-feedback">Please fill out your Session To </div>
  </div>
  </div>
   </div>
   <div class="row ">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="comments">Comments:</label>
    <input type="text" class="form-control card"  required  name="comments" placeholder="Enter Comments" id="comments">
    <div class="valid-feedback">Comments filled</div>
    <div class="invalid-feedback">Please fill out your Comments.</div>
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
@extends('layouts.app')


@section('title')
Updated Page



@section('content')
<div class="container">
  <h2>Class Master Form</h2>
  <form method="post" class="was-validated"  enctype="multipart/form-data" >
  @csrf
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <div class="row ">
        <div class="col-sm-6">
            <div class="form-group">
            
                <label for="sessionno">sessionno:</label>
                <input type="text" class="form-control card" required  value="{{ $session->sno }}"   placeholder="Enter Sessionno" id="sessionno" name="sessionno">
                <div class="valid-feedback">Sessionno from filled</div>
                <div class="invalid-feedback">Please fill out your Sessionno from.</div>
              </div>
              </div>
			  <div class="row ">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="classname">Session From:</label>
    <input type="date" class="form-control card" required  name="classname" value="{{ $session->sessionfrom }}" placeholder="Enter Class Nmae" id="classname">
    <div class="valid-feedback">Session To filled</div>
    <div class="invalid-feedback">Please fill out your Session To </div>
  </div>
  
  <div class="form-group">
    <label for="classname">Session To:</label>
    <input type="date" class="form-control card" required  name="classname" value="{{ $session->sessionto }}" placeholder="Enter Class Nmae" id="classname">
    <div class="valid-feedback">Session To filled</div>
    <div class="invalid-feedback">Please fill out your Session To </div>
  </div>
  
  
  
  
  </div>
  </div>
    <div class="row ">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="remarks">Remarks:</label>
    <input type="text" class="form-control card"  required  name="remarks"  value="{{ $session->comments }}"  placeholder="Enter Remarks" id="remarks">
    <div class="valid-feedback">Remarks filled</div>
    <div class="invalid-feedback">Please fill out your Remarks.</div>
  </div>
  </div>
    <div class="col-sm-6">
  <div class="form-group">
    <label for="enteredby">EnteredBy:</label>
    <input type="text" class="form-control card" required  name="enteredby"  value="{{ $session->enteredby }}"  placeholder="Enter EnteredBy" id="enteredby">
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

<div class="container">

<tr><th>Class Name</th><th>Remarks</th><th>Entered By</th><th>Action</th></tr>

</table>
<div>



@endsection


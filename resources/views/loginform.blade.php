@extends('layouts.app')


@section('title')




@section('content')

<div class="container">
<center>
  <h2>Session Form</h2>
  <form method="post" class="was-validated"  enctype="multipart/form-data" >
  @csrf
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <div class="row ">
	    <div class="col-sm-6">
  <div class="form-group">
    <label for="session">Session:</label>
    <select class="form-control card" required name="session" >
<option value="">Select a session</option>
<option value="2021-2022">2021-2022</option>

</select>
    <div class="valid-feedback">session. filled</div>
    <div class="invalid-feedback">Please fill out your session.</div>
  </div>
  </div>
	   <div class="col-sm-6">
  <div lass="form-group">
    <label for="classno">Classno:</label>
    <select class="form-control card" required name="classno" >
<option value="">Select a classno</option>
<option value="pg">PG</option>
<option value="lkg">LKG</option>
<option value="ukg">UKG</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
    <div class="valid-feedback">admission. filled</div>
    <div class="invalid-feedback">Please fill out your admission.</div>
  </div>
  </div>
            <div class="row ">
	      <div class="col-sm-6">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control  card"  autofocus required name="firstname" placeholder="Enter First Name" id="firstname">
                <div class="valid-feedback">First Name filled</div>
                <div class="invalid-feedback">Please fill out your First Name.</div>  
              </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
            
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control card" required  placeholder="Enter Last Name" id="lastname" name="lastname">
                <div class="valid-feedback">Last Name filled</div>
                <div class="invalid-feedback">Please fill out your Last Name.</div>
              </div>
              </div>
              </div>

     <div class="row ">
  <div class="col-sm-6">
  <div class="form-group">
    <label for="fathersname">Father Name:</label>
    <input type="text" class="form-control card" required  name="fathersname" placeholder="Enter father Name" id="fathersname">
    <div class="valid-feedback">Father Name filled</div>
    <div class="invalid-feedback">Please fill out your Father Name.</div>
  </div>
  </div>
   
  <div class="col-sm-6">
  <div class="form-group">
    <label for="mothersname">Mother Name:</label>
    <input type="text" class="form-control card"  required  name="mothersname" placeholder="Enter Mother Name" id="mothersname">
    <div class="valid-feedback">Mother Name filled</div>
    <div class="invalid-feedback">Please fill out your Mother Name.</div>
  </div>
  </div>
  </div>

  <div class="row ">
    <div class="col-sm-6">
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control card" required  name="address" placeholder="Enter Address" id="address">
    <div class="valid-feedback">Address filled</div>
    <div class="invalid-feedback">Please fill out your Address.</div>
  </div>
  </div>

 <div class="col-sm-6">
  <div class="form-group">
    <label for="emailid">Email Id:</label>
    <input type="text" class="form-control card"  required  name="emailid" placeholder="Enter Email Id" id="emailid">
    <div class="valid-feedback">Email Id filled</div>
    <div class="invalid-feedback">Please fill out your Email Id.</div>
  </div>
  </div>
  </div>
  
   
<div class="row ">
    <div class="col-sm-6">
  <div class="form-group">
    <label for="aadharnumber">Aadhar Number:</label>
    <input type="text" class="form-control card"  required  name="aadharnumber" placeholder="Enter Aadhar Number" id="aadharnumber">
    <div class="valid-feedback">Aadhar Number filled.</div>
    <div class="invalid-feedback">Please fill out your Aadhar Number.</div>
    </div>
    </div>
  <div class="col-sm-6">
  <div class="form-group">
    <label for="mobileno">Mobile No.:</label>
    <input type="text" class="form-control card" required  name="mobileno" placeholder="Enter Mobile No." id="mobileno">
    <div class="valid-feedback">Mobile No. filled</div>
    <div class="invalid-feedback">Please fill out your Mobile No1.</div>
  </div>
  </div>

</div>
  
  

<div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-2">
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
  <br><br>
  
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
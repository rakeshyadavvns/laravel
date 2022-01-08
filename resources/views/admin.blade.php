@extends('layouts.app')


@section('title')




@section('content')
<form method="post" class="was-validated"  enctype="multipart/form-data" >
<div class="container">
 <div class="row ">
	      <div class="col-sm-6">
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control  card"  autofocus required name="username" placeholder="Enter User Name" id="username">
              </div>
        </div>
		</div>
		 <div class="row ">
        <div class="col-sm-6 ">
            <div class="form-group">
            
                <label for="password">Password:</label>
                <input type="text" class="form-control card" required  placeholder="Enter Password" id="password" name="password">
               
              </div>
              </div>
              </div>
			  <div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-2">
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Login</button>
</div>
</div>
</div>
</div>
</form>



@endsection




  @section('content')
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  @endsection
  
  @section('footer')
  <h1>the Footer</h1>
  @endsection
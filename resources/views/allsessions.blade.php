@extends('layouts.app')


@section('title')




@section('content')

<div class="container">
<center>
  <h2>All Sessions</h2>
 
  @csrf
  
    
       <div class="row ">
	    
        <div class="col-sm-12">
<table class="table table-hover table-striped table-bordered">
<tr><th>Session From</th><th>Session From</th><th>Session From</th><th>Action</th></tr>


@foreach($sessions as $session)
    <tr><th>{{$session->sessionfrom}}</th><th>{{$session->sessionto}}</th><th>{{$session->comments}}</th><th><a target="school project" href="showclasses?sessionno={{$session->sno}}">View Session</a></th></tr>
@endforeach






</table>



              </div>
			  </div>
             
  </center>
</div>



@endsection




  @section('content')
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  @endsection
  
  @section('footer')
  <h1>the Footer</h1>
  @endsection
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
<tr><th>Class Name</th><th>Remarks</th><th>Entered By</th><th>Action</th></tr>
@foreach($classes as $currentclass)
    <tr><th>{{$currentclass->classname}}</th><th>{{$currentclass->remarks}}</th><th>{{$currentclass->enteredby}}</th><th><a target="school project" title="{{$currentclass->classname}}" href="showsession?classid={{$currentclass->classid}}">Show Sections</a></th></tr>
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
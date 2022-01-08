<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')



@section('content')

    @csrf
	
  <div class="modal-dialog">
    <img src="/laravel/public/quizpics/cn1.gif"  alt="Computer man" style="width:480px;height:300px;">
    
	
	  <div class="row w3-center w3-animate-left" >
		<marquee width="20%"  direction="left" >
		
		<br>
              <h2 style="width:fit-content; color:green" class="mycard">Thank You.....</h2>
			  <br><br>
			  <h2 style="width:fit-content; color:green" class="mycard">Total Number {{$score}}</h2>
</marquee>
</div>
  </div>
 






@endsection
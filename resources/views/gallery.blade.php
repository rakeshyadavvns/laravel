<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')



@section('content')

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="9"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="10"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="11"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="12"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="13"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img src="/laravel/public/imp/g1.jpg" class="rounded" alt="Cinque Terre" style="width:100%; height:600px">
      
    </div>
    <div class="carousel-item">
      <img src="/laravel/public/imp/g.jpg" class="rounded" alt="Cinque Terre" style="width:100% ;height:600px">
       
    </div>
    <div class="carousel-item">
      <img src="/laravel/public/imp/pl1.jpg" class="rounded" alt="Cinque Terre" style="width:100% ; height:600px">
        
    </div>
	 <div class="carousel-item">
      <img src="/laravel/public/imp/l1.jpg" alt="Chicago" class="d-block" style="width:100%; height:600px">
     
    </div>
    <div class="carousel-item">
      <img src="/laravel/public/imp/g2.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
      <div class="carousel-caption">
      </div>  
    </div>
	 <div class="carousel-item">
      <img src="/laravel/public/imp/co1.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
      <div class="carousel-caption">
      </div>  
    </div>
	 <div class="carousel-item">
      <img src="/laravel/public/imp/g3.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
	  </div>
	  <div class="carousel-item">
      <img src="/laravel/public/imp/l.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
	  </div>
	  <div class="carousel-item">
      <img src="/laravel/public/imp/g5.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
	  </div>
	  <div class="carousel-item">
      <img src="/laravel/public/imp/l2.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
	  </div>
	  <div class="carousel-item">
      <img src="/laravel/public/imp/pl3.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
	  </div>
	  <div class="carousel-item">
      <img src="/laravel/public/imp/g9.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
	  </div>
	  <div class="carousel-item">
      <img src="/laravel/public/imp/g8.jpg" alt="New York" class="d-block" style="width:100%; height:600px">
	  </div>
	
	
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">

<div class=" row "  style="margin-left:10px; margin-bottom:0px; margin-top:50px;"><span class="row rounded-pill"> <div class="col-sm-4"></div><div class="col-sm-4"> <h2><center>CLASS ROOM</center></h2></div><div class="col-sm-4"></div> </span></div>
<div class="row">
<div class="col-sm-4">
  <img src="/laravel/public/imp/cl1.jpg" class=" zoom1" style="  border-radius: 50px;" alt="Chicago" width="440" height="340"> </div>
  <div class="col-sm-4">
  <img src="/laravel/public/imp/cr1.jpg"  class="zoom1 " class=" zoom" style="  border-radius: 50px;"alt="Chicago" width="440" height="340"> </div>
  <div class="col-sm-4">
  <img src="/laravel/public/imp/g.jpg" class=" zoom1" style="  border-radius: 50px;" alt="Chicago" width="440" height="340"> </div>
  </div>
  </div>
  <div class="container-fluid mt-3">
  <div class=" row "  style="margin-left:10px; margin-bottom:0px; margin-top:50px;"><span class="row rounded-pill"> <div class="col-sm-4"></div><div class="col-sm-4"> <h2><center>COMPUTER ROOM</center></h2></div><div class="col-sm-4"></div> </span></div>
  
  <div class="row">
  <div class="col-sm-4">
  <img src="/laravel/public/imp/com.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;" width="440" height="340"> </div>
  <div class="col-sm-4">
  <img src="/laravel/public/imp/co1.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;" width="440" height="340"></div>
<div class="col-sm-4">
  <img src="/laravel/public/imp/cb1.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;" width="440" height="340"> </div>
  </div>
  </div>
  <div class="container-fluid mt-3">
   <div class=" row "  style="margin-left:10px; margin-bottom:0px; margin-top:50px;"><span class="row rounded-pill"> <div class="col-sm-4"></div><div class="col-sm-4"> <h2><center>PLAYING GAME</center></h2></div><div class="col-sm-4"></div> </span></div>
  <div class="row">
  <div class="col-sm-4">
  <img src="/laravel/public/imp/pl1.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;" width="440" height="340"> </div>
  <div class="col-sm-4">
  <img src="/laravel/public/imp/pl2.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;" width="440" height="340"> </div>
  <div class="col-sm-4">
  <img src="/laravel/public/imp/pl3.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;"width="440" height="340"> </div>
  </div>
  </div>
   <div class="container-fluid mt-3">
   <div class=" row "  style="margin-left:10px; margin-bottom:0px; margin-top:50px;"><span class="row rounded-pill"> <div class="col-sm-4"></div><div class="col-sm-4"> <h2><center>LIBRARY</center></h2></div><div class="col-sm-4"></div> </span></div>
  <div class="row">
  <div class="col-sm-4">
  <img src="/laravel/public/imp/l.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;" width="440" height="340"> </div>
  <div class="col-sm-4">
  <img src="/laravel/public/imp/l1.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;"width="440" height="340"> </div>
  <div class="col-sm-4">
  <img src="/laravel/public/imp/l2.jpg" alt="Chicago" class=" zoom1" style="  border-radius: 50px;" width="440" height="340"> </div>
  </div>
  </div>

@endsection
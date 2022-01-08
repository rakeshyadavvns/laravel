<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')



@section('content')
  
  <div class="container-fluid">
  <div class="row">
  <div class="col-sm-7">

  
  <div style="text-align:center">
  <h2>CONTACT INFO<h2>
Welcome to our Education Public School - Varanasi.
<br><br>

Phone
8090776007 
6394533730
<br><br>

Email
Educationpublicschool123@gmail.com
<br><br>

School Address
 Varanasi - 221003
 <br><br>
School Operational Timing
<br>
Summer - 08:00 am - 02:00 pm
<br>
Winters - 09:00 am - 03:00 pm</p>
  
  </div>
</div> 
 <div class="col-sm-5">
    
       <form method="post"> 
	   @csrf
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="india">India</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    




</div>
</div>
</div>
@endsection
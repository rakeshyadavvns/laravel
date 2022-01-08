

@extends('layouts.app')

@section('title', 'Page Title')



@section('content')
<center>
 <img src="/laravel/public/quizpics/ms.jpg"  class="" width="130" height="160"> 
 <img src="/laravel/public/quizpics/rav.jpg"  class="" width="130" height="160">
 <img src="/laravel/public/quizpics/rab.jpg"  class="" width="130" height="160">
 <img src="/laravel/public/quizpics/mu.jpg"  class="" width="130" height="160">
 </center>
 <center>
 <h2>Animated Images</h2>

<p>HTML allows moving images:</p>

<img src="/laravel/public/quizpics/cong.gif" alt="Computer man" style="width:480px;height:480px;">
 
 
 <h1>Audio is here</h1>
<audio controls>
  <source src="/laravel/public/audio/Kishore Kumar.mp3" type="audio/mp3">
  <source src="/laravel/public/audio/Kishore Kumar.mp3" type="audio/mp3">
  </audio>
  <audio controls>
  <source src="/laravel/public/audio/bahubali.mp3" type="audio/mp3">
  <source src="/laravel/public/audio/bahubali.mp3" type="audio/mp3">
</audio>
</center>


<center>

<video width="320" height="240" controls>
  <source src="/laravel/public/video/n8.mp4" type="video/mp4">
  <source src="/laravel/public/video/n8.mp4" type="video/mp4">
</video>
<video width="320" height="240" controls>
  <source src="/laravel/public/video/q6.mp4" type="video/mp4">
  <source src="/laravel/public/video/q6.mp4" type="video/mp4">
</video>
</center>


<img src="/laravel/public/quizpics/lal.jpg"  class="" width="130" height="160"> 
<img src="/laravel/public/quizpics/rj.jpg"  class="" width="130" height="160"> 
<img src="/laravel/public/quizpics/in.jpg"  class="" width="130" height="160"> 
<img src="/laravel/public/quizpics/pt.jpg"  class="" width="130" height="160"> 


	<script>
function f11()
{

alert("Hello");
}
alert("Hello");
</script>
	
	
	
<button type="submit"  onclick="f11()" class="btn btn-primary">Submit</button> 
    </center>
	
	
	
	<p id="demo"></p>

@endsection
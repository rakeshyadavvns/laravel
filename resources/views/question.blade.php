@extends('layouts.app')


@section('title')




@section('content')
 @csrf
 <h3>
<div class="container">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
 <h1>{{ $obj->question}}</h1>
 </div>
 </div>
 <form method="post" class="w3-center w3-animate-zoom card">
 @csrf
 <center> {!! $obj->link !!}</center>
 <input style="display:None;" type="text" name="score" value="{{$score}}">
 <input type="hidden" name="qno" value="{{$obj->questionno}}">
 <div class="row r1" >
 <div class="col-sm-2"></div>
 <div class="col-sm-4">
<div class="form-check">
  <input class="form-check-input" type="radio" name="opt" id="optA" value="1" >
  <label class="form-check-label" for="optA">
	{!! $obj->opta !!}
  </label>
   
</div>
</div>
<div class="col-sm-4">
<div class="form-check">
  <input class="form-check-input" type="radio" name="opt" id="optB" value="2">
  <label class="form-check-label" for="optB">
    {!! $obj->optb !!}
  </label>
</div>
</div>
</div>
<br>
<div class="row">
 <div class="col-sm-2"></div>
 <div class="col-sm-4">
<div class="form-check">
  <input class="form-check-input" type="radio" name="opt" id="optC" value="3">
  <label class="form-check-label" for="optC">
  {!! $obj->optc !!}
  </label>
</div>
</div>
<div class="col-sm-4">
<div class="form-check">
  <input class="form-check-input" type="radio" name="opt" id="optD" value="4">
  <label class="form-check-label" for="optD">
    {!! $obj->optd !!}
  </label>
  </div>
  </div>
  </div>
  <input style="display:None;" checked class="form-check-input" type="radio" name="opt" id="opt" value="---">
  <br>
<div>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="submit" name="command" type="submit" class="btn btn-primary mt-3" value="Submit">
</div>
</div>
</div>
</div>
</div>
</h3>
</form>
@endsection


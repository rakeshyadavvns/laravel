@extends('layouts.app')


@section('title')
Search Page



@section('content')

<div class="container">
<div class="row">
<h2> Search</h2>
<div class="col-sm-2"></div>
<div class="col-sm-8">


<table class=" table table-striped table-bordered table-hover">
<tr><th> Id</th><th>Email Id</th><th>Password</th><th>view<th></tr>
<tr><th> {{ $obj->id }}</th><th> {{ $obj->emailid }}</th><th> {{ $obj->password}} </th><th>  view<th></tr>
</table>

<form method="post" action="loginform" class="was-validated" enctype="multipart/form-data">

@csrf
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-2">
<div class="from-group">
<button type="submit" class="btn btn-primary mb-2">Submit</button>
<button type="submit" class="btn btn-primary mb-2">Show</button>
</form>
</div>
</div>
</div
@endsection


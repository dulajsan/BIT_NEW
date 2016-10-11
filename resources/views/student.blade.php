@extends('layouts.app')

@section('content')

<form role="form" action="store" method="POST">
  <div class="form-group" >
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="submit" class="btn btn-default" name="submit" value="submit"/>
</form>




@endsection
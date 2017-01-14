@extends('layouts.blank')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:45px;">
            <div class="panel panel-default" style="box-shadow: 0 0 4px 0 rgba(0,0,0,.08),0 2px 4px 0 rgba(0,0,0,.12);">
                <div class="panel-heading" style="background-color:#337ab7; height:50px; color:#fff;"><h4>sign in</h4></div>
                <div class="panel text-center">
                    <video width="180px"  autoplay loop>
                      <source src="{{{asset('/videos/logo.webm')}}}" type="video/webm">
                      Your browser does not support the video tag.
                    </video>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">

                                <input id="email" type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}" style="height:47px">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" style="height:47px">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-block btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>


                            </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 ">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <hr/>
                          <div class="form-group">
                            <div class="col-md-12">
                              <!--  <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>-->
                              Dont have an account
                              <a class="btn btn-link" href="{{ url('/register') }}">Sign Up</a>
                            </div>
                          </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function(){
    $(window).on('beforeunload', function() { $("video").hide();$("body").css("background-color", "#a7aaad"); });
  });
    </script>
</div>
@endsection

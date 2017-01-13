@extends('layouts.blank')
<style>
.grad{
  background: -moz-linear-gradient(45deg, rgba(255,255,255,0) 0%, rgba(15,60,120,1) 100%);
  background: -webkit-linear-gradient(45deg, rgba(255,255,255,0) 0%, rgba(15,60,120,1) 100%);
  background: -o-linear-gradient(45deg, rgba(255,255,255,0) 0%, rgba(15,60,120,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(255,255,255,0) 0%, rgba(15,60,120,1) 100%);
  background: linear-gradient(45deg, rgba(255,255,255,0) 0%, rgba(15,60,120,1) 100%);

}

</style>


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top:30px">
             <div class="panel-heading grad"> <img src="{{URL::asset('/images/banner.jpg')}}" alt="profile Pic" height="200" width="100%"> </div>


                <div class="panel-body grad">
                <!--application closing date-->
                    <div class="col-md-6 col-md-offset-3">
                    <span class="label label-info" style="font-size:20px;">Registration is open /closed</span>
                        </div>
                    <br/><br/><br/>

                    <!--register div-->
                    <a href="{{url('/register')}}">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color:#ddd;">Registration</div>
                            <div class="panel-body" style="height:70px;">
                            Register for BIt addmission
                            </div>
                        </div>

                   </div>
                   </a>

                    <!--login div-->
                    <a href="{{url('\login')}}">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color:#ddd;">Login</div>
                            <div class="panel-body" style="height:70px;">
                                Login to submit application
                            </div>

                        </div>

                   </div>
                   </a>

                   <div class="col-md-10 col-md-offset-1">
                    <h3>Closing-date:2016/06/12</h3>
                        </div>




            </div>
        </div>
    </div>
</div>
</div>
@endsection

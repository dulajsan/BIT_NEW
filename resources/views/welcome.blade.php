@extends('layouts.blank')
<style>

.grad{
   background: #b1b1b1;
}
.row {
    background: #004a65;
    margin-right: -15px;
    margin-left: -15px;
}
.panel-default>.panel-heading {
    color: #333;
    background-color: #6d1616;
    border-color: #ddd;
}

</style>


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top:79px;margin-bottom:78px;padding: 0px 0px;">
             <div class="panel-heading grad" style="padding: 0px 0px;"> <img src="{{URL::asset('/images/banner.jpg')}}" alt="profile Pic" height="160" width="100%"> </div>


                <div class="panel-body grad">
                <div class="col-md-1 ">
                <div > <img src="{{URL::asset('/images/welcompic.jpg')}}" alt="profile Pic" height="310" width="470"> </div>

                </div>
                 <span class="label label-info" style="font-size:20px; background:black;padding: .9em .8em .4em;"></span>
                <!--application closing date-->

                    <div class="col-md-3 col-md-offset-6">
                    <span class="label label-info" style="font-weight: 300;margin-left:65px;font-size:20px; background:black;padding: .2em .8em .4em;">Registration is open</span>
                    </div>
                    <br></br>

                    <!--register div-->
                    <a href="{{url('/register')}}">
                    <div class="col-md-5 col-md-offset-6">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="font-size: 16px;background-color: #565656;color: #fbfbfb;">Registration</div>
                            <div class="panel-body text-center" style="height:40px; color:#565656;">
                            Register for BIt addmission
                            </div>
                        </div>

                   </div>
                   </a>

                    <!--login div-->
                    <a href="{{url('\login')}}">
                    <div class="col-md-5 col-md-offset-6">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="font-size: 16px;background-color: #565656;color: #fbfbfb;">Login</div>
                            <div class="panel-body text-center" style="height:40px;color:#565656;">
                                Login to submit application
                            </div>

                        </div>

                   </div>

                   </a>

                   <div class="col-md-4 col-md-offset-6 text-center" style="font-size: 14px;background:#ddd; margin-left: 463px;">
                    <h4>Closing-date:2016/06/12</h4>
                    </div>




            </div>
        </div>
    </div>
</div>
</div>
@endsection

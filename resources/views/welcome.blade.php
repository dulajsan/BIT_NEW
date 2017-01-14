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
                    <canvas id="MyCanvas" width="300" height="75">This browser or document mode doesn't support canvas object</canvas>
                    </div>
                    <br></br>

                    <!--register div-->
                    <a href="{{url('/register')}}">
                    <div class="col-md-5 col-md-offset-6">
                        <div class="panel panel-default">
                              <div class="panel-heading text-center" style="font-size: 16px;background-color: #565656;color: #fbfbfb;">Register</div>
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

<script type="text/javascript">
var can, ctx, step = 2, steps = 20;
    var  delay = 20;

        function init() {

            can = document.getElementById("MyCanvas");
            ctx = can.getContext("2d");
            ctx.fillStyle = "red";
            ctx.font = "2pt Helvetica";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            TextSmallToBig();
        }
        function TextSmallToBig() {
            step++;
            ctx.clearRect(0, 0, can.width, can.height);
            ctx.save();
            ctx.translate(can.width / 2, can.height / 2);
            ctx.font = step + "pt Helvetica";
            ctx.fillText("Registration is open", 0, 0);
            ctx.restore();
            if (step < steps)
                var t = setTimeout('TextSmallToBig()',10);
        }



        $(document).ready(function(){

          init();
        });

    </script>

</div>
@endsection

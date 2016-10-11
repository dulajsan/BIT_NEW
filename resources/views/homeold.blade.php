@extends('layouts.app')
<style>

#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
}

#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
	background: #337ab7;
	display: inline-block;
}

#clockdiv div > span{
	padding: 15px;
	border-radius: 3px;
	background: #1a5496;
	display: inline-block;
}

.smalltext{
	padding-top: 5px;
	font-size: 16px;
}

</style>

@section('content')

<!--
dash board of applicant
-->
 <div class="container">
        <div id="page-wrapper">
          <!--row-->
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="page-header">Applicant Dashboard</h2>
                </div>
                    <!--applicant no-->
                  <div class="col-lg-3">
                  @foreach($applicants as $applicant)
                    <span class="glyphicons glyphicons-arrow-right"><p><h3>Your Applicant NO:</h3>{{$applicant->applicant_no}}</p></span>
                    @endforeach
                </div>
                <!--./applicant no-->

            </div>
            <!-- /.row -->

            <!--row-->
            <div class="row">

              <!--left side-->
              <div class="col-sm-3">
                <!--left button 1-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <a href="{{ url('/edit') }}">
                        <img src="{{URL::asset('/images/edite.jpg')}}" alt="profile Pic"  class="img-fluid img-thumbnail"
                        height="auto" width="100%" style="padding:15px">
                        </a>
                    </div>
                </div>
              <!--./left button one-->
              <br/>
              <!--left button two-->
              <div class="row">
                <div class="col-lg-12 col-md-12">
                    <a href="{{ url('/getApp')}}">
                       <img src="{{URL::asset('/images/app.jpg')}}" alt="profile Pic" class="img-fluid img-thumbnail"
                       height="aut0" width="100%" style="padding:15px">
                    </a>
                </div>
              </div>
                <!--./left button two-->
                <br/>
                <!--left button three-->
                <div class="row">
                <div class="col-lg-12 col-md-12">
                    <a href="{{url('/getVouch')}}">
                      <img src="{{URL::asset('/images/vou.jpg')}}" alt="profile Pic" class="img-fluid img-thumbnail"
                       height="auto" width="100%" style="padding:15px">
                    </a>
                </div>
              </div>
                <!--./left button-->
              </div>
              <!--./left side-->

              <!--center-->
              <div class="col-sm-4 text-center">
                  <div class="row">

                    <div id="clockdiv">
                        <div>
                          <span class="days"></span>
                          <div class="smalltext">Days</div>
                        </div>
                        <div>
                          <span class="hours"></span>
                          <div class="smalltext">Hours</div>
                        </div>
                        <div>
                          <span class="minutes"></span>
                          <div class="smalltext">Minutes</div>
                        </div>
                        <div>
                          <span class="seconds"></span>
                          <div class="smalltext">Seconds</div>
                        </div>
                      </div>

                  </div>

                <div class="row" style="margin-top:60px">
                  <!--bank slip-->
                  <div class="col-sm-10">
                  <div class="form-group">
                    <label for="bank slip">Bank slip no:</label>
                    <textarea class="form-control" rows="1" id="slip" placeholder="Enter bank slip no" style="font-size:20px;"></textarea>
                  </div>
                  </div>
                  <!--./bank slip-->

                  <!--help for bank slip-->
                  <div class="col-sm-2">
                    <span class="glyphicon glyphicon-question-sign" style="margin-top:44px;margin-left:-36px" data-toggle="modal" data-target="#myModal"></span>
                  </div>
                  <!--./help for bank slip-->
                </div>

                  <div class="row">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-lg">Confirm my registration</button>
                    </div>
                  </div>
              </div>
              <!--./center-->

              <!--right-->
              <div class="col-sm-5 ">
                <!--instructins-->
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Instructions</div>
                    <div class="panel-body" style="height:auto" style="text-align:left;">
                      <!--instruction content-->
                      <b>Read the following instructions carefully before you proceed.</b>
                      <br/>
                      <p>Your username will be:<b>{{Auth::user()->full_name}}</b></p>
                        <p>Your password will be:<b>{{Auth::user()->nic_passport}}</b></p>
                        <ul>
                          <li>Go to edit details and make sure your details are correct.</li>
                          <li>go to the ‘Voucher’ link and get the voucher downloaded.</li>
                          <li>go to the ‘Application’ link and get the Application downloaded</li>
                          <li>Once you get downloaded the application or voucher, You can not edit your details</li>
                          <li>Go to the nearest ‘People’s bank’ and transfer the Application fee mentioned in the voucher to
                            the 0046-4587-5858-4563 BIT-UCSC account, Colombo University branch. Do not forget to get the voucher
                             sealed at the counter. <b>This amount is not refunded.</b></li>
                            <li>Now log into your temporary account and enter the code number of the bank slip you got for the money
                              transaction on the box you see here. And submit it.</li>
                            <li>Complete the process before the dead line.</li>
                            <li>Bring the Application form, Voucher and the Bank slip when you come for the registration.</li>
                            For more details, Contact Us:- 0112222548, 0112222547, 0112225569

                        </ul>



                      <!--./instruction content-->

                    </div>
                 </div>
                  <!--./instructions-->
              </div>
              <!--./right-->
            </div>
            <!--./row-->




            </div>

    </div>



<!--modal-->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter bank slip number</h4>
      </div>
      <div class="modal-body">
         <img src="{{{asset('/images/help.jpg')}}}" class="img-thumbnail" alt="avatar" width="300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <!--end of modal-->

 <!--count down-->
 <script>

 function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

//var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
var deadline = new Date("2016", "08", "06", "24", "60", "60", "60");
initializeClock('clockdiv', deadline);
</script>


 <!--./count down-->


@endsection

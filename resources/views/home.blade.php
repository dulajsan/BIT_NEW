@extends('layouts.app')

@section('content')
<link rel='stylesheet' href='http://fullcalendar.io/js/fullcalendar-2.2.3/fullcalendar.css' />
<style>

.dropdown{
  background-color: rgba(48, 38, 140, 0.97);
}


.custom_bx{
  border-color: #337ab7;
  position: absolute;
  margin-top:163px;
  margin-left:-398px;
  height: 32px;

}


.custom_bx:hover{
  box-shadow: 0 5px #666;
  transform: translateX(4px);

}
.panel-heading{
  background-color:#337ab7;
  color:#fff;

}

.panel-heading:hover{
  background-color: #2f5989;
  transform: translateX(5px);
}

.panel-heading:active {
  background-color: #2f5989;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.navbar {
     margin-bottom: 0;
     border-radius: 0;
     background-color: #0108AB;
   }



.well-min {
  padding: 4px;
  background-color: #f5f5f5;
  margin-bottom: 2px;
  border: 1px solid #0108AB;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.05);

}

   /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
   .row.content {height: 560px}

   /* Set gray background color and 100% height */
   .sidenav {
     padding-top: 20px;
     background-color: #f1f1f1;
     height: 100%;
   }

   /* Set black background color, white text and some padding */
   footer {
     background-color: #555;
     color: white;
     padding: 15px;
   }
   h1 {
       font-size: 30px;
       color: #03098F;
   }

   .img-thumbnail {
   display: inline-block;
   max-width: 100%;
   height: auto;
   padding: 4px;
   line-height: 1.42857143;
   background-color: #fff;
   border: 1px solid #03098F;
   border-radius: 4px;
   -webkit-transition: all .2s ease-in-out;
   -o-transition: all .2s ease-in-out;
   transition: all .2s ease-in-out;
}


   /* On small screens, set height to 'auto' for sidenav and grid */
   @media screen and (max-width: 767px) {
     .sidenav {
       height: auto;
       padding: 15px;
     }
     .row.content {height:auto;}
   }
 </style>



<div class="container-fluid text-center">
  <div class="row content container-fluid">
      <div class="col-sm-2 sidenav">

        @foreach($users as $user)
        <img src="/uploads/avatars/{{$user->profile_pic_url}}" class="avatar img-circle" style="width:160px"/>
        <!-- <img  src="{{URL::asset('/images/p.png')}}" class="img-thumbnail" alt="Cinque Terre"  width="124" height="16"> -->
        <p>{{$user->last_name}}</p>
        @endforeach
     <br>
     <!--edit details-->
    <a href="{{ url('/edit') }}">
     <div class="panel-heading">
      <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-pencil-square-o fa-3x"></i>
          </div>
          <div class="col-xs-9 text-right">
              <div class="huge"></div>
              <div>Edit Details</div>
          </div>
      </div>
    </div>
  </a>
    <!--./edit details-->
<br/>

    <!--download voucher-->
    <a href="{{ url('/getVouch') }}">
     <div class="panel-heading">
      <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-pencil-square-o fa-3x"></i>
          </div>
          <div class="col-xs-9 text-right">
              <div class="huge"></div>
              <div>Download voucher</div>
          </div>
      </div>
    </div>
  </a>
    <!--./download voucher-->

<br/>
    <!--download application-->
    <a href="{{ url('/getApp') }}">
     <div class="panel-heading">
      <div class="row">
          <div class="col-xs-3">
              <i class="fa fa-pencil-square-o fa-3x"></i>
          </div>
          <div class="col-xs-9 text-right">
              <div class="huge"></div>
              <div>Download Application</div>
          </div>
      </div>
    </div>
  </a>

    <!--./download application-->


    </div>

    <!--center content-->
    <div class="col-sm-6 "style="background-color:#FFF">
      <h2 style="text-align:left">Applicant Dashboard</h2>
      <hr>
      <ol class="breadcrumb" style="text-align:left">
          <li class="active">
              <i class="fa fa-dashboard"></i> Dashboard
          </li>
      </ol>
      <div class="alert alert-info">
        <strong>Info!</strong> Before proceed, Please read instructions carefully.
      </div>


      <hr>

      <h3>
        <!--bank slip-->
            <img  src="{{URL::asset('/images/a.jpeg')}}" class="img-thumbnail" alt="Cinque Terre"  width="450" height="150" style="opacity:0.7">
        <!--./bank slip-->

        <!--slip no text box-->
            <input type="textbox" class="custom_bx" placeholder="Enter slip number" id="txt_slip">

        <!--./slip no text box-->
      </h3>

<br/>
      <button type="button" class="btn btn-primary" id="btn_slip">Confirm the Slip Number</button>


  </div>
    <!--center content-->

    <div class="col-sm-4 sidenav">


<br/>

      <!--instruction-->

        <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active">
              Instructions
            </button>
            <h2>Instructions for the Applicant</h2>
        			<h3 style="color: red;"><b>Important!</b></h3>
        			<h4>This is a temporary account for you till the registration.</h4>

              <ul>
            		<li>Click <mark style="color:blue;font-weight:bold"> Edit Details </mark> to change your basic contact information other than the authentication details.</li>
            		<li>Click <mark style="color:blue;font-weight:bold">Downlad Voucher</mark> which is for UCSC, Bank & for You.</li>
            		<li>Click <mark style="color:blue;font-weight:bold">Download Application</mark> which is used to handover to UCSC along with the payment voucher on the Registration Day.</li>
            		<li>After payments, enter the slip number in the given space to confirm the payments.</li>


            	</ul>
          </div>
        <!--./instruction-->



    </div>
  </div>
</div>

<script>

//ajax for confirm slip no and disable account
$(document).ready(function(){

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $("#btn_slip").click(function(){
    var slip=$("#txt_slip").val();
    if(slip==""){
      alert("Enter slip Number");
    }
    else{
      //alert(slip);
      $.ajax({
        url:"/addslip",
        type:"GET",
        data:{'slips': slip},
        success:function(data, textstatus, jqXHR){
          //if success then logout and disable account
          window.location="{{URL::to('logout')}}";

        },
        error:function(jqXHR, textstatus, errorThrown){
          //alert(errorThrown);
          alert("Try again later");

        }
      });
    }

  });

});

</script>



@endsection

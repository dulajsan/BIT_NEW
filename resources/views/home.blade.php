@extends('layouts.app')

@section('content')
<link rel='stylesheet' href='http://fullcalendar.io/js/fullcalendar-2.2.3/fullcalendar.css' />
<style>


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
    <div class="col-sm-8 "style="background-color:#FFF">
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
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!--./slip no text box-->
      </h3>

<br/>
      <button type="button" class="btn btn-primary" id="btn_slip">Confirm the Slip Number</button>


  </div>
    <!--center content-->

    <div class="col-sm-2 sidenav">

      <div class="span12">
               <table class="table-condensed table-bordered table-striped">
                   <thead>
                       <tr>
                           <th colspan="7">
                               <span class="btn-group">

                         <p style="margin-left: 48px;">September 2016</p>

                       </span>
                           </th>
                       </tr>
                       <tr>
                           <th>Su</th>
                           <th>Mo</th>
                           <th>Tu</th>
                           <th>We</th>
                           <th>Th</th>
                           <th>Fr</th>
                           <th>Sa</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td class="muted">29</td>
                           <td class="muted">30</td>
                           <td class="muted">31</td>
                           <td>1</td>
                           <td>2</td>
                           <td>3</td>
                           <td>4</td>
                       </tr>
                       <tr>
                           <td>5</td>
                           <td>6</td>
                           <td>7</td>
                           <td>8</td>
                           <td>9</td>
                           <td>10</td>
                           <td>11</td>
                       </tr>
                       <tr>
                           <td>12</td>
                           <td>13</td>
                           <td>14</td>
                           <td>15</td>
                           <td>16</td>
                           <td>17</td>
                           <td>18</td>
                       </tr>
                       <tr>
                           <td>19</td>
                           <td>20</td>
                           <td class="btn-primary"><strong>21</strong></td>
                           <td>22</td>
                           <td>23</td>
                           <td>24</td>
                           <td>25</td>
                       </tr>
                       <tr>
                           <td>26</td>
                           <td>27</td>
                           <td>28</td>
                           <td>29</td>
                           <td class="muted">1</td>
                           <td class="muted">2</td>
                           <td class="muted">3</td>
                       </tr>
                   </tbody>
               </table>
           </div>
<br/>

          <!-- <div class="container-fluid">
            <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#337ab7;color:#fff">Applicant NO</div>
          <div class="panel-body">
            @foreach($applicants as $applicant)
              <b>{{$applicant->applicant_no}}</b>
              @endforeach
          </div>
        </div>
        </div> -->


<br/>
      <!--instruction-->

          <div class="container-fluid">
            <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#337ab7;color:#fff">Instructions</div>
          <div class="panel-body" style="text-align:left">
            <ul>
              <li>Edit details</li>
              <li>download voucher</li>
              <li>download application</li>
              <li>Pay relevant amount</li>
              <li>enter slip number </li>
            </ul>

          </div>
        </div>
        </div>
        <!--./instruction-->



    </div>
  </div>
</div>

<script>

$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
});

$(document).ready(function(){


  $("#btn_slip").click(function(){
    var slip=$("#txt_slip").val();
    if(slip==""){
      alert("Enter slip Number");
    }
    else{
      //alert(slip);
      $.ajax({
        url:"/addslip",
        type:"POST",
        data:"slips="+slip,
        success:function(data, textstatus, jqXHR){
          alert("added succesfully");

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

<!--

    This is where all the dashboard's header and side bar handles
    ||||||||||||||||
   user roles
   |||||||||||||||
   applicant-0 student-1 admin-2
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>dashborad</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>



     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <script type="text/javascript" src="{{asset('js/metisMenu.js')}}"></script>


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .navbar-default .navbar-nav>li>a {
            color:white !important;
        }
        li{
            border-bottom: 1px solid #b5a8a8;
        }

        .left_tabs{
            display: block;
            padding: 10px 15px 10px 38px;
            text-decoration: none;
            color: #b2b1c5;
            width: 225px;

        }

        .left_tabs:hover{
            color:white;
            background-color: #1a1f21;

        }

        .white_backg{
        	background: #FFF;

            max-width: 120rem;
            min-width: 390px;
            height: 50rem;

            box-shadow: 0 0 6px rgba(0,0,0,.4);
        }


    </style>




</head>
@if (Auth::guest())
<body id="app-layout" style="background-color:#f8f8f8;">
@else
 <body id="app-layout">
@endif
<div id="wrapper">
    <nav class="navbar  navbar-fixed-top" role="navigation" style="background-color:#0f1010">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:#FFF;font-size:35px">BIT</a><span><a href="#" class="navbar-brand" style="color:#FFF">External Degree Center</span></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>lahiru </strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>sample message message </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>poorna perera</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>sample message message </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>sample message message</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert one <span class="label label-default">Alert</span></a>
                        </li>
                        <li>
                            <a href="#">Alert two <span class="label label-primary">Alert </span></a>
                        </li>
                        <li>
                            <a href="#">Alert three <span class="label label-success">Alert</span></a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> @if (Auth::user()->role==2) Admin @else dulaj @endif <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"> <i class="fa fa-fw fa-power-off"> </i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="side-nav nav navbar-nav">
                    <li style="width:100%;margin-top:17px">
                      <center>
                        <img src="{{{asset('/images/default.png') }}}"  height="155px" width="80%"/>
                      </center>
                    </li>

                      <!--
               |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                        coordinator      coordinator     coordinator      coordinator
               ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                        -->


                    @if(Auth::user()->role==4)

                    <!--dashborad side tab-->

                     <li class="active left_tabs" id="dashboard_coord">
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                    </li>

                    <!--end of dashboard-->

                    <!--user registration side tab-->
                    <li class="active left_tabs" id="filter">
                        <i class="fa fa-fw fa-bar-chart-o"></i>user registration
                    </li>
                    <!-- end of user registration-->

                    <!--upload tutorials-->
                    <li id="upload" class="left_tabs">
                        <i class="fa fa-fw fa-bar-chart-o"></i>Upload Tutorials
                    </li>
                    <!--end of upload tutorials-->
                     <li class="active left_tabs">
                        <i class="fa fa-fw fa-desktop"></i>Exams
                    </li>



                     <li>
                     <!--edit fees-->
                      <li id="editfees" class="left_tabs">
                       <i class="fa fa-fw fa-wrench"></i> Edit Fees</a>
                    </li>
                    <!--end of edit fees-->


                    <!--courses-->
                    <li id="courses" class="left_tabs">
                        <i class="fa fa-fw fa-wrench"></i> Courses
                    </li>
                    <!--courses-->

                    <li class="left_tabs">
                        <i class="fa fa-fw fa-file"></i> Results handling
                    </li>

                    <li class="left_tabs" id="accounting">
                       <i class="fa fa-fw fa-file"></i> Accounting
                    </li>

                    @endif

               <!--
               |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                        student     student     student     student     student   111111
                |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                        -->




                     @if(Auth::user()->role==1)

                     <!-- dashborad home tab -->

                     <li class="active left_tabs" id="dashboard">
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                    </li>

                    <!--end of dashboard home tab-->


                    <li class="left_tabs">
                      <i class="fa fa-fw fa-bar-chart-o"></i> Statistics
                    </li>


                    <!-- <li id="exam" class="left_tabs">
                        <i class="fa fa-fw fa-desktop"></i>Exams
                    </li> -->
                    <li>
                          <span href="javascript:;" class="left_tabs" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Exam<i class="fa fa-fw fa-caret-down"></i></span>
                          <ul id="demo" class="collapse">
                              <li class="left_tabs" id="exam" style="border:none;">
                                <i class="fa"></i> Exam apply
                              </li>
                              <li class="left_tabs" style="border:none" id="exam_payments">
                                  <i class="fa"></i>payment
                              </li>
                              <li class="left_tabs" id="exam_admissions">
                                  <i class="fa"></i>Admission
                              </li>
                          </ul>
                      </li>

                    <li class="left_tabs">
                      <i class="fa fa-fw fa-wrench"></i> Settings
                    </li>

                    <li class="left_tabs" id="result">
                        <i class="fa fa-fw fa-file"></i> Results
                    </li>

                    <li id="idcard" class="left_tabs">
                       <i class="fa fa-fw fa-file"></i>New iD card
                    </li>

                    <li id="message" class="left_tabs">
                       <i class="fa fa-fw fa-file"></i>Message
                    </li>

                    <li class="left_tabs">
                        <i class="fa fa-fw fa-dashboard"></i>VLE
                    </li>
                    <li class="left_tabs">
                        <i class="fa fa-fw fa-dashboard"></i>BIT.lk
                    </li>

                    @endif

                    <!--
                    |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                             SAR SAR    SAR   SAR   SAR   SAR   SAR  333333333
                     |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                             -->


                    @if(Auth::user()->role==3)

                    <!-- dashborad home tab -->

                    <li class="active left_tabs" id="dashboard">
                       <i class="fa fa-fw fa-dashboard"></i> Dashboard
                   </li>

                   <!--end of dashboard home tab-->


                    <!--letters handling-->
                    <li id="letters" class="left_tabs">
                        <i class="fa fa-fw fa-bar-chart-o"></i>Letters
                    </li>
                    <!--end of letters handling-->

                      <!--exam hall-->
                    <li id="examHall" class="left_tabs">
                        <i class="fa fa-fw fa-bar-chart-o"></i>Exam Halls
                    </li>
                    <!--end of exam halls-->

                    <!--uplaod results-->
                  <li id="resultupload" class="left_tabs">
                      <i class="fa fa-fw fa-bar-chart-o"></i>Upload Results
                  </li>
                  <!--upload results-->

                  <!--manage exams-->
                <li id="manageExam" class="left_tabs">
                    <i class="fa fa-fw fa-bar-chart-o"></i>Manage Exams
                </li>
                <!--end of manage exams-->

                    <li class="left_tabs">
                        <i class="fa fa-fw fa-dashboard"></i>VLE
                    </li>
                    <li class="left_tabs">
                        <i class="fa fa-fw fa-dashboard"></i>BIT.lk
                    </li>

                    @endif


                    <!--
                    |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                             admin  admin   admin   admin   admin
                     |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                             -->


                    @if(Auth::user()->role==2)



                    <li id="manageUsers" class="left_tabs">
                        <i class="fa fa-fw fa-bar-chart-o"></i>Manage System Users
                    </li>

                    <li id="account" class="left_tabs">
                        <i class="fa fa-fw fa-bar-chart-o"></i>Account
                    </li>

                    <li class="left_tabs">
                        <i class="fa fa-fw fa-dashboard"></i>VLE
                    </li>
                    <li class="left_tabs">
                        <i class="fa fa-fw fa-dashboard"></i>BIT.lk
                    </li>

                    @endif



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div class="container" id="contentmain" style="background-color:#fff ; width:100%">

        </div>
<!-- gfd -->

    @yield('content')

    <!-- JavaScripts -->


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
 <!--dashboard content loads through ajax-->

    <script>
$(document).ready(function(){
/** coordinator **/

// dashborad main page
$("#dashboard_coord").click(function(){
   $("#contentmain").empty();
    $("#page-wrapper").empty();
  $("#page-wrapper").load( "/coorddash #page-wrapper");
});

    //upload tutorial needed for BIT
    $("#upload, #tutes_panel").click(function(){
         $( "#contentmain" ).empty();
         $("#page-wrapper").empty();
         $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/uploadtuto.css') }}') );
       $( "#page-wrapper" ).load( "/uploadTuto #page-wrapper");
    });


    //accounting

    $("#accounting, #accounting_panel").click(function(){
         $("#page-wrapper").empty();
         $("#contentmain").empty();
       $( "#page-wrapper").load( "/accounting #page-wrapper");
    });

    //end of accounting

    //edit fees
      $("#editfees").click(function(){
         $("#page-wrapper").empty();
         $( "#contentmain").empty();
       $( "#page-wrapper").load("/editfees #page-wrapper");
    });
      //end of edit fees

       //new couses and existing courses
      $("#courses, #course_panel").click(function(){
         $("#page-wrapper").empty();
         $( "#contentmain").empty();
       $( "#page-wrapper").load( "/courses #page-wrapper");
    });
      //end of new courses and existing courses


      //filter student
      $("#filter, #user_reg_panel").click(function(){
         $("#page-wrapper").empty();
         $( "#contentmain").empty();
         $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/classic.css') }}') );
       $( "#page-wrapper").load( "/filter #page-wrapper");
    });


      //filter student


/** student **/
    // id card request
     $("#idcard").click(function(){
       $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/exam.css') }}') );
         $("#page-wrapper").empty();
         $("#contentmain").empty();
       $("#page-wrapper").load( "/idCard #page-wrapper");
    });
     // dashborad main page
     $("#dashboard").click(function(){
        $("#contentmain").empty();
         $("#page-wrapper").empty();
       $("#page-wrapper").load( "/dashboard #page-wrapper");
    });


    //exam payment
    $("#exam_payments").click(function(){
       $("#contentmain").empty();
        $("#page-wrapper").empty();
      $("#page-wrapper").load( "/exam_payment #page-wrapper");
   });
   //end of exam payment

   $("#exam_admissions").click(function(){
      $("#contentmain").empty();
       $("#page-wrapper").empty();
     $("#page-wrapper").load( "/exam_admission #page-wrapper");
  });

  //results
  $("#result").click(function(){
     $("#contentmain").empty();
      $("#page-wrapper").empty();
      $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/results.css') }}') );
    $("#page-wrapper").load( "/results #page-wrapper");
 });

    //exams
      $("#exam").click(function(){
        $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/exam.css') }}') );
        //   $('head').append( $('<script type="text/javascript" />').attr('src', '{{ URL::asset('js/exam.js') }}') );
          //$.getScript('{{ URL::asset('js/exam.js') }}');

        $("#page-wrapper").empty();
       $("#contentmain").empty();
       $("#page-wrapper").load( "/st_exam #page-wrapper");


    });

    $("#message").click(function(){
       $("#contentmain").empty();
        $("#page-wrapper").empty();
        $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/chat.css') }}') );
      $("#page-wrapper").load( "/messages #page-wrapper");
   });
    //message

    $("#result").click(function(){
       $("#contentmain").empty();
        $("#page-wrapper").empty();
        $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/results.css') }}') );
      $("#page-wrapper").load( "/results #page-wrapper");
   });


    /** SAR **/


    //exam hall handling
   $("#examHall").click(function(){
        $( "#contentmain" ).empty();
        $("#page-wrapper").empty();
      $( "#page-wrapper").load( "/sar #page-wrapper");
   });

   //end of exam hall handling


   //upload results
  $("#resultupload").click(function(){
       $( "#contentmain" ).empty();
       $("#page-wrapper").empty();
     $( "#page-wrapper").load( "/resultUpload #page-wrapper");
  });

  //end of uplaod results


        //letters handling
       $("#letters").click(function(){
            $( "#contentmain" ).empty();
            $("#page-wrapper").empty();
              $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css') );
          $( "#page-wrapper" ).load( "/letters #page-wrapper");
       });

       //end of letter handling


          //manage exams
         $("#manageExam").click(function(){
              $( "#contentmain" ).empty();
              $("#page-wrapper").empty();
            $( "#page-wrapper").load( "/create_exam #page-wrapper");
         });

         //end of manage exams


        /** admin   admin admin admin   admin **/

        $("#account").click(function(){
             $( "#contentmain" ).empty();
             $("#page-wrapper").empty();
           $( "#page-wrapper").load( "/account #page-wrapper");
        });

        //manage users of the system
        $("#manageUsers").click(function(){
              $( "#contentmain" ).empty();
              $("#page-wrapper").empty();
            $( "#page-wrapper").load( "/manage_users #page-wrapper");
            $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '{{ URL::asset('css/classic.css') }}') );
         });

        //end of manage users


});
</script>


</body>
</html>
